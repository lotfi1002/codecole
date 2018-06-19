<?php
namespace ParametrageBundle\Functions;

class DaysCalender{

	public function getMounth($date){
		$name_m = ["Janv.","Fév.","Mars","Avr.","Mai","Juin", "Juil.","Août","Sept.","Oct.","Nov.","Déc."];
		$m = explode('-', date_format($date,'d-m-Y'))[1];
		return $name_m[$m-1];
	}
	
	public function getDay($date){
		switch (date('l', strtotime(date_format($date,'d-m-Y')))) {
			case 'Monday': return 'Lundi';
			case 'Tuesday': return 'Mardi';
			case 'Wednesday': return 'Mercredi';
			case 'Thursday': return 'Jeudi';
			case 'Friday': return 'Vendredi';
			case 'Saturday': return 'Samedi';
			case 'Sunday': return 'Dimanche';
		}
		return $weekday;
	}

	public function diff_weeks($dt1, $dt2) 
	{
	    $diff = (strtotime($dt2->format('Y-m-d H:i:s')) - strtotime($dt1->format('Y-m-d H:i:s')) );
	    $diff /= (60 * 60 * 24 * 7);
	    return abs(round($diff)); 
	}
	public function diff_weeks2($dt1, $dt2) 
	{
	    $diff = (strtotime($dt2->format('Y-m-d H:i:s')) - strtotime($dt1->format('Y-m-d H:i:s')) );
	    $diff /= (60 * 60 * 24 * 7);
	    if ($diff <= 0) return 0;
    	return intval ($diff) ;
	}

	public function getFirstDay($dt){
		$year = explode('-', date_format($dt,'Y-m-d'))[0];
		$date = new \Datetime($year.'-'.explode('-', date_format($dt,'Y-m-d'))[1].'-01');
		$weekInMonth = $this->diff_weeks(new \Datetime(($year-1).'-12-29'), $date);
		return new \Datetime ($date->setISODate($year, $weekInMonth, 1)->format('Y-m-d'));
	}

	public function getFirstDayInWeek($dt){
		$year = explode('-', date_format($dt,'Y-m-d'))[0];
		$weekInMonth = $this->diff_weeks(new \Datetime(($year-1).'-12-29'), $dt);
		return explode("-", $dt->setISODate($year, $weekInMonth, 1)->format('Y-m-d')) [2];
	}

	public function NumberOfMonths($dt1, $dt2){
		$month1 = explode('-', date_format($dt1,'Y-m-d'))[1];
		$month2 = explode('-', date_format($dt2,'Y-m-d'))[1];
		$diff = $month1 > $month2 ? 12-($month1 - $month2) : $month2 - $month1;
		return $diff;
	}

	public function getWeek($dt1, $dt2, $dt3){
		$year = explode('-', date_format($dt1,'Y-m-d'))[0];
		$month = explode('-', date_format($dt1,'Y-m-d'))[1];
		$day = explode('-', date_format($dt1,'Y-m-d'))[1];
		$dt = new \Datetime($year."-".$month."-".$day);
		$weekInMonth = $this->diff_weeks(new \Datetime(($year-1).'-12-29'), $dt);
		$dt = $dt->setISODate($year, $weekInMonth, 1)->format('Y-m-d');
		if( new \Datetime($dt) > $dt2 || $dt3 < $dt2) return 0;
		return $this->diff_weeks2(new \Datetime($dt), $dt2) + 1;
	}

	public function getSemestre($depart, $Semestres){
		$Semestre = "";
		$inc = 1;
		foreach ($Semestres as $key) {
			if($inc == 1 && $depart->format('Y-m-d') == $key[0] ) {
				$Semestre = "Rentrée";
				break;
			}
			elseif ($depart->format('Y-m-d') == $key[0]) {
				$Semestre = "Début-S".$inc;
				break;
			}
			elseif ($depart->format('Y-m-d') == $key[1]) {
				$Semestre = "Fin-S".$inc;
				break;
			}
			$inc++;
		}
		return $Semestre;
	}

	public function getVacance($depart, $listeFiries){
		$Vacance = "";
		foreach ($listeFiries as $key) {
			if( $key[0] <= $depart->format('Y-m-d') && $key[1] >= $depart->format('Y-m-d')){
				$Vacance = $key[2];
			}
		}
		return $Vacance;
	}

	public function getNotDay($depart, $date1, $date2){
		$nd = "";
		if( $date1 >= $depart || $date2 < $depart) $nd = 'not-day2';
		return $nd;
	}
	public function getAllDay($date1, $date2, $Semestres, $listeFiries){
		$dt = $date1;
		$NOM = $this->NumberOfMonths($date1, $date2)."<br>";
		$Days = [];
		for($i = 0; $i <= $NOM; $i++){
			$days = [];
			$month=[];
			$depart = $this->getFirstDay($dt);
			$Semaine = $this->getWeek($date1, $depart, $date2);
			$Semestre = $this->getSemestre($depart, $Semestres);
			$Vacance = $this->getVacance($depart, $listeFiries);
			$libelle = $Semestre == '' ? $Vacance : $Semestre;
			$NotDay = $this->getNotDay($depart, $date1, $date2);
			array_push($days, explode('-', date_format($depart,'Y-m-d'))[2]." ".$this->getMounth($depart)." ".$this->getDay($depart)." ".$Semaine." ".$libelle." ".$NotDay." ".$depart->format('Y-m-d'));
			for ($j = 1; $j<42; $j++){
				$depart = new \DateTime(date('Y-m-d', strtotime(date_format($depart,'d-m-Y').' + 1 days')));
				$Semaine = $this->getWeek($date1, $depart, $date2);
				$Semestre = $this->getSemestre($depart, $Semestres);
				$Vacance = $this->getVacance($depart, $listeFiries);
				$libelle = $Semestre == '' ? $Vacance : $Semestre;
				$NotDay = $this->getNotDay($depart, $date1, $date2);
				array_push($days, explode('-', date_format($depart,'Y-m-d'))[2]." ".$this->getMounth($depart)." ".$this->getDay($depart)." ".$Semaine." ".$libelle." ".$NotDay." ".$depart->format('Y-m-d'));
			}
			array_push($month, $this->getMounth($dt));
			array_push($month, $days);
			$dt = new \DateTime(date('d-m-Y', strtotime(date_format($dt,'d-m-Y').' + 1 months')));
			array_push($Days, $month);
		}
		return $Days;
		//$Days => [ Month, [DaysArray-1, DaysArray-2, ..., DaysArray-N ] ]
		//DaysArray => DaysNumInMonth  MonthName  DayName  NumOfSemaine          <OldVersion>
		//DaysArray => DaysNumInMonth  MonthName  DayName  NumOfSemaine Vancance not-day2 DateYmd<NewVersion>
	}
}
?>
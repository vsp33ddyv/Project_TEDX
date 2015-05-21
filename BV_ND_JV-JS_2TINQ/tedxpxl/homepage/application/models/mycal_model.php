<?php
class Mycal_model extends CI_Model{
	
	var $conf;
	function Mycal_model(){
		parent::__construct();
		
		$this->conf = array(
		/*'start_day' => 'monday',*/
		'show_next_prev' => true,
		'next_prev_url'  =>  base_url().'Homepage/display/',
		'start_day'    => strtolower(date('l'))
		);
		
		$this->conf['template']= '
		 {table_open}<table border="0" cellpadding="0" cellspacing="0" class="calendar" >{/table_open}

        {heading_row_start}<tr>{/heading_row_start}

        {heading_previous_cell}<th><a href="{previous_url}">&lt;&lt;</a></th>{/heading_previous_cell}
        {heading_title_cell}<th colspan="{colspan}">{heading}</th>{/heading_title_cell}
        {heading_next_cell}<th><a href="{next_url}">&gt;&gt;</a></th>{/heading_next_cell}

        {heading_row_end}</tr>{/heading_row_end}

        {week_row_start}<tr>{/week_row_start}
        {week_day_cell}<td>{week_day}</td>{/week_day_cell}
        {week_row_end}</tr>{/week_row_end}

        {cal_row_start}<tr class="days">{/cal_row_start}
        {cal_cell_start}<td class="day">{/cal_cell_start}
        {cal_cell_start_today}<td>{/cal_cell_start_today}
        {cal_cell_start_other}<td class="other-month">{/cal_cell_start_other}

        {cal_cell_content}
        		<div class="day_num">{day}</div>
        		<div class="content">{content}</div>
        {/cal_cell_content}
		
		
        {cal_cell_content_today}
                <div class="day_num highlight">{day}</div>
        		<div class="content">{content}</div>   
        {/cal_cell_content_today}


        {cal_cell_no_content}
        		<div class="day_num">{day}</div>
        {/cal_cell_no_content}
		
		
        {cal_cell_no_content_today}
				<div class="day_num highlight">{day}</div>
		</div>{/cal_cell_no_content_today}


        {cal_cell_blank}&nbsp;{/cal_cell_blank}

        {cal_cell_other}{day}{cal_cel_other}

        {cal_cell_end}</td>{/cal_cell_end}
        {cal_cell_end_today}</td>{/cal_cell_end_today}
        {cal_cell_end_other}</td>{/cal_cell_end_other}
        {cal_row_end}</tr>{/cal_row_end}

        {table_close}</table>{/table_close}
		';
	}

	function generate (){
		$this->load->library('calendar', $this->conf);
		$events = $this-> get_calendar_data();
		return $this->calendar->generate($this->uri->segment(3), 
										$this->uri->segment(4),
										$events);
		$events = $this->get_calendar_data();
	}


function get_calendar_data(){
	
	$query = $this->db->select('datum, beschrijving')
	->from('kalender')->get();
	//->like('datum',"after")->get();
	$events = array();
	
	foreach ($query -> result() as $row) {
		$events[substr($row->datum,8,2)] = $row->beschrijving;
	}
	
	return $events;	
	
}
function add_calendar_data($datum,
							$beschrijving,
							$details_event,
							$start_uur,
							$eind_uur,
							$locatie,
							$publiek,
							$event_id){
	if($this-> db-> select('event_id')-> from('tedxpxl'.'kalender')
	-> where('event_id', $event_id)->count_all_results())
	{
		$this->db->where('event_id', $event_id)
		->update('tedxpxl'.'kalender', array(
			'event_id' => $event_id,
			'beschrijving' => $beschrijving,
			'datum' => $datum,
			'locatie' => $locatie,
			'start_uur' => $start_uur,
			'eind_uur' => $eind_uur,
			'publiek' => $publiek,
			'details_event' => $details_event
		));	
	}else{
		$this->db->insert('tedxpxl'.'kalender',array(
		'event_id' => $event_id,
		'beschrijving' => $beschrijving,
		'datum' => $datum,
		'locatie' => $locatie,
		'start_uur' => $start_uur,
		'eind_uur' => $eind_uur,
		'publiek' => $publiek,
		'details_event' => $details_event
	));	
	}						
	
							}
}
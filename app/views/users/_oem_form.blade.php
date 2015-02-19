 <div class="form-group">
{{ Form::select('firm_type',$firm_type,'',array('class' => 'form-control', 'placeholder' => "",'required' => true))}}                                    
</div>

<div class="form-group">
{{ Form::select('no_production_sites',array('' => 'Number of Production Sites','0-1' => '1','1-3'=> '1 to 3','3-5' => '3 to 5'),'',array('class' => 'form-control', 'placeholder' => "",'required' => true))}}                                    
</div>
 <div class="form-group">
{{ Form::select('noe_current_branch',array('' => 'Number of Employees at current branch office','1-10' => '1 to 10','10-30'=> '10 to 30','30-100' => '30 to 100'),'',array('class' => 'form-control', 'placeholder' => "",'required' => true))}}                                    
</div>

<div class="form-group">
{{ Form::select('noe_across_globe',array('' => 'Number of Employees across globe','1-10' => '1 to 10','10-30'=> '10 to 30','30-100' => '30 to 100'),'',array('class' => 'form-control', 'placeholder' => "",'required' => true))}}                                    
</div>

 <div class="form-group">
{{ Form::select('annual_turnover',array('' => 'Annual turnover','100K' => 'Upto $ 100,000','100K-1M'=> '100 to 1 Million','1M-20M' => '1 to 20M'),'',array('class' => 'form-control', 'placeholder' => "",'required' => true))}}                                    
</div>

 <div class="form-group">
{{ Form::select('annual_research_spend',array('' => 'Funds spent on Research Annually','100K' => 'Upto $ 100,000','100K-1M'=> '100 to 1 Million','1M-20M' => '1 to 20M'),'',array('class' => 'form-control', 'placeholder' => "",'required' => true))}}                                    
</div> 

 <div class="form-group">
{{ Form::select('no_distributor_in_india',array('' => 'Number of Distributor in India','0-1' => '1','1-3'=> '1 to 3','3-5' => '3 to 5'),'',array('class' => 'form-control', 'placeholder' => "",'required' => true))}}                                    
</div> 

<div class="form-group">
{{ Form::select('beta_level_development',array('' => 'Interested in beta level development','0' => 'No','1'=> 'Yes','2' => 'May Be'),'',array('class' => 'form-control', 'placeholder' => "",'required' => true))}}                                    
</div>                                
 <div class="form-group">
{{ Form::select('no_distributor_outside_india',array('' => 'Number of Distributor outside India','0-1' => '1','1-3'=> '1 to 3','3-5' => '3 to 5'),'',array('class' => 'form-control', 'placeholder' => "",'required' => true))}}                                    
</div>                               

<div class="form-group">
{{ Form::select('looking_for_d3bs',array('' => 'Looking for D3Bs','0' => 'No','1'=> 'Yes','2' => 'May Be'),'',array('class' => 'form-control', 'placeholder' => "",'required' => true))}}                                    
</div>
<div class="form-group">
{{ Form::text('sales_region','',array('class' => 'form-control', 'placeholder' => 'Sales Region Covered', "required" => true))}}                                    
</div>  
<div class="form-group">
{{ Form::select('no_sales_ofc_in_india',array('' => 'Sales office in India','0-1' => '1','1-3'=> '1 to 3','3-5' => '3 to 5'),'',array('class' => 'form-control', 'placeholder' => "",'required' => true))}}                                    
</div>
 <div class="form-group">
{{ Form::select('no_sales_ofc_outside_india',array('' => 'Sales office outside India','0-1' => '1','1-3'=> '1 to 3','3-5' => '3 to 5'),'',array('class' => 'form-control', 'placeholder' => "",'required' => true))}}                                    
</div>
<div class="form-group">
{{ Form::text('instrument_status','',array('class' => 'form-control', 'placeholder' => 'Regulatory Status of Instruments','required' => true))}}                                    
</div>
<div class="form-group">
{{ Form::text('d3_attr_seeking','',array('class' => 'form-control', 'placeholder' => "Top 3 Distributor Attributes seeking",'required' => true))}}                                    
</div>
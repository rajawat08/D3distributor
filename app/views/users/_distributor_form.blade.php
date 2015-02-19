 <div class="form-group">
{{ Form::select('firm_type',$firm_type,'',array('class' => 'form-control', 'placeholder' => "",'required' => true))}}                                    
</div>
 <div class="form-group">
{{ Form::select('no_distribution_sites',array('' => 'Number of Distribution Sites','0-1' => '1','1-3'=> '1 to 3','3-5' => '3 to 5'),'',array('class' => 'form-control', 'placeholder' => "",'required' => true))}}                                    
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
{{ Form::select('looking_for_oem',array('' => 'Looking for OEM','0' => 'No','1'=> 'Yes','2' => 'May Be'),'',array('class' => 'form-control', 'placeholder' => "",'required' => true))}}                                    
</div>
<div class="form-group">
{{ Form::text('distributor_region','',array('class' => 'form-control', 'placeholder' => 'Distribution Region Covered','required' => true))}}                                    
</div>    
                        
<div class="form-group">
{{ Form::text('distributor_strength','',array('class' => 'form-control', 'placeholder' => "Top 3 Strengths as a Distributor",'required' => true))}}                                    
</div>
<div class="form-group">
{{ Form::select('market_exp',array('' => 'Marketing Expertise','1-5years' => '1 to 5years','3-10years'=> '3 to 10years','other' => 'Others'),'',array('class' => 'form-control', 'placeholder' => "",'required' => true))}}                                    
</div>
<div class="form-group">
{{ Form::select('tech_support_exp',array('' => 'Technical Support Expertise','1-5years' => '1 to 5years','3-10years'=> '3 to 10years','other' => 'Others'),'',array('class' => 'form-control', 'placeholder' => "",'required' => true))}}                                    
</div>
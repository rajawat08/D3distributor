<div class="form-group">
{{ Form::select('primary_research_area',$p_research_area,'',array('class' => 'form-control', 'placeholder' => "",'required' => true))}}                                    
</div>
                                
<div class="form-group">
{{ Form::text('sec_research_area','',array('class' => 'form-control', 'placeholder' => "Secondary Research Area",'required' => true))}}                                    
</div>
<div class="form-group">
{{ Form::text('primary_pro_fn_area','',array('class' => 'form-control', 'placeholder' => "Primary Product functional Area",'required' => true))}}                                    
</div>
<div class="form-group">
{{ Form::text('sec_pro_fn_area','',array('class' => 'form-control', 'placeholder' => "Secondary Product functional area",'required' => true))}}                                    
</div>

<div class="form-group">
{{ Form::select('no_research_sites',array('' => 'Number of Research Sites','0-1' => '1','1-3'=> '1 to 3','3-5' => '3 to 5'),'',array('class' => 'form-control', 'placeholder' => "",'required' => true))}}                                    
</div>
<div class="form-group">
{{ Form::select('noe_current_branch',array('' => 'Number of Employees at current branch office','1-10' => '1 to 10','10-30'=> '10 to 30','30-100' => '30 to 100'),'',array('class' => 'form-control', 'placeholder' => "",'required' => true))}}                                    
</div>
<div class="form-group">
{{ Form::select('noe_across_globe',array('' => 'Number of Employees across globe','1-10' => '1 to 10','10-30'=> '10 to 30','30-100' => '30 to 100'),'',array('class' => 'form-control', 'placeholder' => "",'required' => true))}}                                    
</div>
<div class="form-group">
{{ Form::select('pro_thr_tender_process',array('' => 'Procurement through Tender process ?','0' => 'No','1'=> 'Yes'),'',array('class' => 'form-control', 'placeholder' => "",'required' => true))}}          
</div>

  <div class="form-group">
                                {{ Form::select('annual_turnover',array('' => 'Annual turnover','100K' => 'Upto $ 100,000','100K-1M'=> '100 to 1 Million','1M-20M' => '1 to 20M'),'',array('class' => 'form-control', 'placeholder' => "",'required' => true))}}                                    
                                </div>                                                              
  <div class="form-group">
                                {{ Form::select('source_of_funds',$source_of_fund,'',array('class' => 'form-control', 'placeholder' => "",'required' => true,'multiple'=>true))}}                                    
                                </div> 
<div class="form-group">
                                {{ Form::select('beta_level_development',array('' => 'Interested in beta level development','0' => 'No','1'=> 'Yes','2' => 'May Be'),'',array('class' => 'form-control', 'placeholder' => "",'required' => true))}}                                    
                                </div>
<div class="form-group">
    {{ Form::text('d3_attr_seeking','',array('class' => 'form-control', 'placeholder' => "Top 3 Distributor Attributes seeking",'required' => true))}}                                    
    </div>
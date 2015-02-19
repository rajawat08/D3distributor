<?php
return [
	
    'site_name' => 'eRateWorks - DMS',										// This is the path where TMS uploads are stored.

     /*
     * This is the path where TMS uploads are stored.
     */
    //'product_image_path' => public_path() . '/images/products',


    'product_image_path' => 'images/products',




    'product_dir' => '/images/products',
	
	'firm_type' => ['Public','Private','Subsidiary of another firm'],  // for distributors or OEMs only
	
	'company_type' => ['Government','Private','Semi Government'], // only for users
	
	'primary_research_area' => ['Mol. Gen','Proteomics','Cell Biology'],
	
	'source_of_fund' => ['' => 'Source of funds','Private Investors' => 'Private Investors','Govt Funding'=> 'Govt Fundind','Research Grants' => 'Research Grants','VC Funding' => 'VC Funding'],
	];
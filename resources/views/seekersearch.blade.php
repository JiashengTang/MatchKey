<!DOCTYPE html>
@extends('layouts.app')

@section('content')
  </head>
  <body class="bg-light">
  <div class="py-5">
    <h2>Matching Selection</h2>
    <p class="lead">Please complete the following things to continue the match function</p>
  </div>
  {!! Form::open(['url'=> 'seekersearch/submit'])!!}
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Matching Details</h4>
      <form class="needs-validation" novalidate>
        <div class="row">
          <div class="col-md-6 mb-3">
          {{Form::label('education','Your education level')}}
          {{Form::select('education', array('Collage' => 'Collage', 'Highschool' => 'High school','None'=>'None'), 'Collage',['class'=>'custom-select d-block w-100'])}}
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 mb-3">
          {{Form::label('jobtype','Job Type you are looking for')}}
          {{Form::select('jobtype', array('administration' => 'Administration', 'advocacy' => 'Advocacy &amp; Campaigns', 'agedcare' => 'Aged Care &amp; Seniors’ Rights', 'alcoholandotherdrugs' => 'Alcohol &amp; Other Drugs', 'animalwelfareandprotection' => 'Animal Welfare &amp; Protection', 'businessdevelopment' => 'Business Development &amp; Sales', 'careandsupportservices' => 'Care &amp; Support Work', 'coopsandcreditunions' => 'Co-ops &amp; Credit Unions', 'communicationsandmarketing' => 'Communications &amp; Marketing', 'communityanddevelopment' => 'Community Development', 'conservationandmanagement' => 'Conservation &amp; Land Management', 'corporatesocialresponsibility' => 'Corporate Social Responsibility','disabilityservices'=>'Disability Services','earlychildhood'=>'Early Childhood','ecotourism'=>'Eco-Tourism','educationandtraining'=>'Education &amp; Training','environmentandsustainability'=>'Environment &amp; Sustainability','executiveseniormanagement'=>'Executive &amp; Senior Management','familyservices'=>'Family Services','fairtradeorganicandecoretail'=>'FairTrade &amp; Organic','financeandaccounting'=>'Finance &amp; Accounting','fundraising'=>'Fundraising','glbt'=>'GLBTI &amp; Sexual Health','greenarchitectureandproperty'=>'Green Architecture/Property','greenenergy'=>'Green Energy','greenproductsandservices'=>'Green Products &amp; Services','healthcare'=>'Health Care &amp; Allied Health','healthpromotion'=>'Health Promotion','housing'=>'Housing &amp; Homelessness','hrandemploymentservices'=>'HR &amp; Employment Services','indigenous'=>'Indigenous','internationalaidandevelopment'=>'International Aid &amp; Development','itandcommunicationtechnology'=>'I.T. &amp; Communication Technology','legalandhumanrights'=>'Legal &amp; Human Rights','management'=>'Management','mediaartsandentertainment'=>'Media &amp; Arts','medicalresearch'=>'Medical Research','mentalhealthandcounselling'=>'Mental Health &amp; Counselling','multiculturalismdiversity'=>'Multiculturalism &amp; Diversity','nursing'=>'Nursing','operationsriskmanagement'=>'Operations &amp; Risk Management','organicfarmingandgardening'=>'Organic Farming &amp; Gardening','policyandresearch'=>'Policy &amp; Research','projectmanagement'=>'Project Management','recyclingandwastemanagement'=>'Recycling &amp; Waste Management','customerservice'=>'Retail &amp; Hospitality','socialwork'=>'Social Work','sustainabletransport'=>'Sustainable Transport','tradesandservices'=>'Trades &amp; Services','unionsandworkersrights'=>'Unions &amp; Workers Rights','volunteermanagement'=>'Volunteer Management','womensorganisationsandservices'=>'Women Organisations &amp; Services','youthservices'=>'Youth'), 'administration',['class'=>'custom-select d-block w-100'])}}
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-3">
          {{Form::label('city','City you perfer')}}
            {{Form::select('city', array('vic' => 'Melbourne', 'regvic' => 'Regional VIC','nsw'=>'Sydney','regnsw'=>'Regional NSW','qld'=>'Brisbane &amp; Gold Coast','regqld'=>'Regional QLD','wa'=>'Perth','regwa'=>'Regional WA','sa'=>'Adelaide','regsa'=>'Regional SA','tas'=>'Hobart','regtas'=>'Regional TAS','nt'=>'Darwin','regnt'=>'Regional NT','act'=>'Canberra &amp; ACT'), 'vic',['class'=>'custom-select d-block w-100'])}}
          </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
            {{Form::label('experience','Working experience you have')}}
            {{Form::select('experience', array('0' => '0 years', '1' => '1-2 years','2' => '2-5 years','5' =>'5+ years'), '0',['class'=>'custom-select d-block w-100'])}}
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
            {{Form::label('salaryrange','Salary')}}<span class="text-muted"> /month</span>
			      {{Form::select('salaryrange',array('0' => '0-1 k', '1000' => '1-2 k','2000' => '2-5 k','5000' =>'5+ k'), '0',['class'=>'custom-select d-block w-100'])}}
            </div>
        </div>
        <div class="row">
          <div class="col-md-12 mb-10" width="900" height="20">
            {{Form::label('keywords','Keywords')}}
            {{Form::text('keywords','',['class'=> 'form-control','placeholder'=>'Enter Keywords'])}}
          </div>
        </div>
        <hr class="mb-4">
        {{Form::submit('Saved',['class'=>'btn btn-primary'])}}
      </form>
      {!!Form::close()!!}
    </div>
@endsection
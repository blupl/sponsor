@set_meta('title', 'Host Broadcastre Form')

{!! Form::open(['url'=>'management/management']) !!}
{!! Form::hidden('user_id', Auth::user()->id) !!}
{!! Form::hidden('franchise_id', Auth::user()->franchise->id) !!}

<fieldset xmlns="http://www.w3.org/1999/html">
    <div class="form-group">
        <div class="col-md-8 col-md-offset-2">
            {!! Form::label('organization_name', 'NAME OF SPONSORING ORGANIZATION') !!}
            {!! Form::select('organization_name', ['other'=>'Other'], null, ['class'=>'form-control select2', 'style'=>'width: 100%;']) !!}
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-6">
            {!! Form::label('name_applicant', 'NAME OF APPLICANT') !!}
            {!! Form::text('name_applicant', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-md-6">
            {!! Form::label('nationality', 'NATIONALITY') !!}
            {!! Form::text('nationality', null, ['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-6">
            {!! Form::label('gender', 'GENDER') !!}
            {!! Form::select('gender', ['male'=>'Male', 'female'=>'Female', 'other'=>'Other'], null, ['class'=>'form-control select2', 'style'=>'width: 100%;']) !!}
        </div>
        <div class="col-md-6">
            {!! Form::label('email', 'CONTACT E-MAIL') !!}
            {!! Form::text('email', null, ['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-6">
            {!! Form::label('personal_id', 'PASSPORT OR NID NUMBER') !!}
            {!! Form::text('personal_id', null,['class'=>'form-control']) !!}
        </div>
        <div class="col-md-6">
            {!! Form::label('mobile', 'CONTACT MOBILE NUMBER') !!}
            {!! Form::text('phone', null, ['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-8">
            {!! Form::label('designation', 'DESIGNATION') !!}
            {!! Form::text('designation', null, ['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-6">
            {!! Form::label('office_address', ' OFFICE ADDRESS') !!}
            {!! Form::text('office_address1', null, ['class'=>'form-control', 'placeholder'=>'Line 1']) !!}
            {!! Form::text('office_address2', null, ['class'=>'form-control', 'placeholder'=>'Line 1']) !!}
            <div class="col-md-6">
                {!! Form::select('present_district', [
                'barguna'=>'Barguna',
                'bhola'=>'Bhola',
                'bogra'=>'Bogra',
                'jhalokati'=>'Jhalokati',
                'patuakhali'=>'Patuakhali',
                'pirojpur'=>'Pirojpur',
                'bandarban'=>'Bandarban',
                'brahmanbaria'=>'Brahmanbaria',
                'chandpur'=>'Chandpur',
                'chittagong'=>'Chittagong',
                'comilla'=>'Comilla',
                'cox-bazar'=>'Cox&rsquo;s Bazar',
                'feni'=>'Feni',
                'khagrachhari'=>'Khagrachhari',
                'lakshmipur'=>'Lakshmipur',
                'noakhali'=>'Noakhali',
                'rangamati'=>'Rangamati',
                'dhaka'=>'Dhaka',
                'faridpur'=>'Faridpur',
                'gazipur'=>'Gazipur',
                'gopalganj'=>'Gopalganj',
                'kishoreganj'=>'Kishoreganj',
                'madaripur'=>'Madaripur',
                'manikganj'=>'Manikganj',
                'munshiganj'=>'Munshiganj',
                'narayanganj'=>'Narayanganj',
                'narsingdi'=>'Narsingdi',
                'rajbari'=>'Rajbari',
                'shariatpur'=>'Shariatpur',
                'tangail'=>'Tangail',
                'bagerhat'=>'Bagerhat',
                'chuadanga'=>'Chuadanga',
                'jessore'=>'Jessore',
                'jhenaidah'=>'Jhenaidah',
                'khulna'=>'Khulna',
                'kushtia'=>'Kushtia',
                'magura'=>'Magura',
                'meherpur'=>'Meherpur',
                'narail'=>'Narail',
                'satkhira'=>'Satkhira',
                'jamalpur'=>'Jamalpur',
                'mymensingh'=>'Mymensingh',
                'netrakona'=>'Netrakona',
                'sherpur'=>'Sherpur',
                'joypurhat'=>'Joypurhat',
                'naogaon'=>'Naogaon',
                'natore'=>'Natore',
                'chapainawabganj'=>'Chapainawabganj',
                'pabna'=>'Pabna',
                'rajshahi'=>'Rajshahi',
                'sirajganj'=>'Sirajganj',
                'dinajpur'=>'Dinajpur',
                'gaibandha'=>'Gaibandha',
                'kurigram'=>'Kurigram',
                'lalmonirhat'=>'Lalmonirhat',
                'nilphamari'=>'Nilphamari',
                'panchagarh'=>'Panchagarh',
                'rangpur'=>'Rangpur',
                'thakurgaon'=>'Thakurgaon',
                'habiganj'=>'Habiganj',
                'moulvibazar'=>'Moulvibazar',
                'sunamganj'=>'Sunamganj',
                'sylhet'=>'Sylhet'
                ], 'dhaka', ['class'=>'form-control select2', 'placeholder'=>'District-Choose from list', 'style'=>'width: 100%;']) !!}
            </div>
            <div class="col-md-6">
                {!! Form::text('present_zip', null, ['class'=>'form-control', 'placeholder'=>'Post Code']) !!}
            </div>
            <div class="col-md-6">
                {!! Form::select('country', null, ['class'=>'form-control', 'placeholder'=>'Bangladesh', 'select2', 'readonly']) !!}
            </div>
        </div>

        <div class="col-md-6">
            {!! Form::label('present_office_address', 'PRESENT RESIDENT ADDRESS') !!}
            {!! Form::text('permanent_address1', null, ['class'=>'form-control', 'placeholder'=>'Line 1']) !!}
            {!! Form::text('permanent_address2', null, ['class'=>'form-control', 'placeholder'=>'Line 1']) !!}
            <div class="col-md-6">
                {!! Form::select('permanent_district', [
                'barguna'=>'Barguna',
                'bhola'=>'Bhola',
                'bogra'=>'Bogra',
                'jhalokati'=>'Jhalokati',
                'patuakhali'=>'Patuakhali',
                'pirojpur'=>'Pirojpur',
                'bandarban'=>'Bandarban',
                'brahmanbaria'=>'Brahmanbaria',
                'chandpur'=>'Chandpur',
                'chittagong'=>'Chittagong',
                'comilla'=>'Comilla',
                'cox-bazar'=>'Cox&rsquo;s Bazar',
                'feni'=>'Feni',
                'khagrachhari'=>'Khagrachhari',
                'lakshmipur'=>'Lakshmipur',
                'noakhali'=>'Noakhali',
                'rangamati'=>'Rangamati',
                'dhaka'=>'Dhaka',
                'faridpur'=>'Faridpur',
                'gazipur'=>'Gazipur',
                'gopalganj'=>'Gopalganj',
                'kishoreganj'=>'Kishoreganj',
                'madaripur'=>'Madaripur',
                'manikganj'=>'Manikganj',
                'munshiganj'=>'Munshiganj',
                'narayanganj'=>'Narayanganj',
                'narsingdi'=>'Narsingdi',
                'rajbari'=>'Rajbari',
                'shariatpur'=>'Shariatpur',
                'tangail'=>'Tangail',
                'bagerhat'=>'Bagerhat',
                'chuadanga'=>'Chuadanga',
                'jessore'=>'Jessore',
                'jhenaidah'=>'Jhenaidah',
                'khulna'=>'Khulna',
                'kushtia'=>'Kushtia',
                'magura'=>'Magura',
                'meherpur'=>'Meherpur',
                'narail'=>'Narail',
                'satkhira'=>'Satkhira',
                'jamalpur'=>'Jamalpur',
                'mymensingh'=>'Mymensingh',
                'netrakona'=>'Netrakona',
                'sherpur'=>'Sherpur',
                'joypurhat'=>'Joypurhat',
                'naogaon'=>'Naogaon',
                'natore'=>'Natore',
                'chapainawabganj'=>'Chapainawabganj',
                'pabna'=>'Pabna',
                'rajshahi'=>'Rajshahi',
                'sirajganj'=>'Sirajganj',
                'dinajpur'=>'Dinajpur',
                'gaibandha'=>'Gaibandha',
                'kurigram'=>'Kurigram',
                'lalmonirhat'=>'Lalmonirhat',
                'nilphamari'=>'Nilphamari',
                'panchagarh'=>'Panchagarh',
                'rangpur'=>'Rangpur',
                'thakurgaon'=>'Thakurgaon',
                'habiganj'=>'Habiganj',
                'moulvibazar'=>'Moulvibazar',
                'sunamganj'=>'Sunamganj',
                'sylhet'=>'Sylhet'
                ], 'dhaka', ['class'=>'form-control select2', 'placeholder'=>'District-Choose from list', 'style'=>'width: 100%;']) !!}
            </div>
            <div class="col-md-6">
                {!! Form::text('permanent_zip', null, ['class'=>'form-control', 'placeholder'=>'Post Code']) !!}
            </div>
            <div class="col-md-6">
                {!! Form::select('country', null, ['class'=>'form-control', 'placeholder'=>'Bangladesh', 'select2', 'readonly']) !!}
            </div>
        </div>
    </div>
    <div class="col-md-6">
        {!! Form::label('permanent_resident_address', 'PERMANENT RESIDENT ADDRESS') !!}
        {!! Form::text('permanent_resident_address1', null, ['class'=>'form-control', 'placeholder'=>'Line 1']) !!}
        {!! Form::text('permanent_resident_address2', null, ['class'=>'form-control', 'placeholder'=>'Line 1']) !!}
        <div class="col-md-6">
            {!! Form::select('permanent_district', [
            'barguna'=>'Barguna',
            'bhola'=>'Bhola',
            'bogra'=>'Bogra',
            'jhalokati'=>'Jhalokati',
            'patuakhali'=>'Patuakhali',
            'pirojpur'=>'Pirojpur',
            'bandarban'=>'Bandarban',
            'brahmanbaria'=>'Brahmanbaria',
            'chandpur'=>'Chandpur',
            'chittagong'=>'Chittagong',
            'comilla'=>'Comilla',
            'cox-bazar'=>'Cox&rsquo;s Bazar',
            'feni'=>'Feni',
            'khagrachhari'=>'Khagrachhari',
            'lakshmipur'=>'Lakshmipur',
            'noakhali'=>'Noakhali',
            'rangamati'=>'Rangamati',
            'dhaka'=>'Dhaka',
            'faridpur'=>'Faridpur',
            'gazipur'=>'Gazipur',
            'gopalganj'=>'Gopalganj',
            'kishoreganj'=>'Kishoreganj',
            'madaripur'=>'Madaripur',
            'manikganj'=>'Manikganj',
            'munshiganj'=>'Munshiganj',
            'narayanganj'=>'Narayanganj',
            'narsingdi'=>'Narsingdi',
            'rajbari'=>'Rajbari',
            'shariatpur'=>'Shariatpur',
            'tangail'=>'Tangail',
            'bagerhat'=>'Bagerhat',
            'chuadanga'=>'Chuadanga',
            'jessore'=>'Jessore',
            'jhenaidah'=>'Jhenaidah',
            'khulna'=>'Khulna',
            'kushtia'=>'Kushtia',
            'magura'=>'Magura',
            'meherpur'=>'Meherpur',
            'narail'=>'Narail',
            'satkhira'=>'Satkhira',
            'jamalpur'=>'Jamalpur',
            'mymensingh'=>'Mymensingh',
            'netrakona'=>'Netrakona',
            'sherpur'=>'Sherpur',
            'joypurhat'=>'Joypurhat',
            'naogaon'=>'Naogaon',
            'natore'=>'Natore',
            'chapainawabganj'=>'Chapainawabganj',
            'pabna'=>'Pabna',
            'rajshahi'=>'Rajshahi',
            'sirajganj'=>'Sirajganj',
            'dinajpur'=>'Dinajpur',
            'gaibandha'=>'Gaibandha',
            'kurigram'=>'Kurigram',
            'lalmonirhat'=>'Lalmonirhat',
            'nilphamari'=>'Nilphamari',
            'panchagarh'=>'Panchagarh',
            'rangpur'=>'Rangpur',
            'thakurgaon'=>'Thakurgaon',
            'habiganj'=>'Habiganj',
            'moulvibazar'=>'Moulvibazar',
            'sunamganj'=>'Sunamganj',
            'sylhet'=>'Sylhet'
            ], 'dhaka', ['class'=>'form-control select2', 'placeholder'=>'District-Choose from list', 'style'=>'width: 100%;']) !!}
        </div>
        <div class="col-md-6">
            {!! Form::text('permanent_zip', null, ['class'=>'form-control', 'placeholder'=>'Post Code']) !!}
        </div>
        <div class="col-md-6">
            {!! Form::select('country', null, ['class'=>'form-control', 'placeholder'=>'Bangladesh', 'select2', 'readonly']) !!}
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-6">
            {!! Form::label('attachment', 'SCAN COPY OF PASSPORT BIO-PAGE OR BOTH SIDES OF NID') !!}
            {!! Form::text('attachment', null,['class'=>'form-control']) !!}
        </div>
        <div class="col-md-6">
            {!! Form::label('photo', 'UPLOAD RECENTLY TAKEN PORTRAIT PHOTO') !!}
            {!! Form::text('photo', null, ['class'=>'form-control']) !!}
        </div>
    </div>
</fieldset>

<fieldset>
    <div class="divider"></div>
    <div class="form-group">
        <div class="col-md-12">
            {!! Form::submit('Submit', ['class'=>'btn-success']) !!}
        </div>
    </div>
</fieldset>
{!! FOrm::close() !!}
<!DOCTYPE html>

<html lang="en">

<head>
    <link href="{{ asset('vendor/bladewind/css/flags.css') }}" rel="stylesheet" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hello
    </title>
    <link href="{{ asset('vendor/bladewind/css/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/bladewind/css/bladewind-ui.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('vendor/bladewind/js/helpers.js') }}"></script>
    @vite('resources/css/app.css')
    <script defer src="//unpkg.com/alpinejs"></script>
</head>

<body>
    <?php
    $countries = [
        ['country' => 'Afghanistan', 'code' => 'af'],
        ['country' => 'Antigua', 'code' => 'ag'],
        ['country' => 'Anguilla', 'code' => 'ai'],
        ['country' => 'Albania', 'code' => 'al'],
        ['country' => 'Armenia', 'code' => 'am'],
        ['country' => 'Netherlands Antilles', 'code' => 'an'],
        ['country' => 'Angola', 'code' => 'ao'],
        ['country' => 'Argentina', 'code' => 'ar'],
        ['country' => 'American Samoa', 'code' => 'as'],
        ['country' => 'Austria', 'code' => 'at'],
        ['country' => 'Australia', 'code' => 'au'],
        ['country' => 'Aruba', 'code' => 'aw'],
        ['country' => 'Aland Islands', 'code' => 'ax'],
        ['country' => 'Azerbaijan', 'code' => 'az'],
        ['country' => 'Bosnia', 'code' => 'ba'],
        ['country' => 'Barbados', 'code' => 'bb'],
        ['country' => 'Bangladesh', 'code' => 'bd'],
        ['country' => 'Belgium', 'code' => 'be'],
        ['country' => 'Burkina Faso', 'code' => 'bf'],
        ['country' => 'Bulgaria', 'code' => 'bg'],
        ['country' => 'Bahrain', 'code' => 'bh'],
        ['country' => 'Burundi', 'code' => 'bi'],
        ['country' => 'Benin', 'code' => 'bj'],
        ['country' => 'Bermuda', 'code' => 'bm'],
        ['country' => 'Brunei', 'code' => 'bn'],
        ['country' => 'Bolivia', 'code' => 'bo'],
        ['country' => 'Brazil', 'code' => 'br'],
        ['country' => 'Bahamas', 'code' => 'bs'],
        ['country' => 'Bhutan', 'code' => 'bt'],
        ['country' => 'Bouvet Island', 'code' => 'bv'],
        ['country' => 'Botswana', 'code' => 'bw'],
        ['country' => 'Belarus', 'code' => 'by'],
        ['country' => 'Belize', 'code' => 'bz'],
        ['country' => 'Canada', 'code' => 'ca'],
        ['country' => 'Cocos Islands', 'code' => 'cc'],
        ['country' => 'Congo', 'code' => 'cd'],
        ['country' => 'Central African Republic', 'code' => 'cf'],
        ['country' => 'Congo Brazzaville', 'code' => 'cg'],
        ['country' => 'Switzerland', 'code' => 'ch'],
        ['country' => 'Cote Divoire', 'code' => 'ci'],
        ['country' => 'Cook Islands', 'code' => 'ck'],
        ['country' => 'Chile', 'code' => 'cl'],
        ['country' => 'Cameroon', 'code' => 'cm'],
        ['country' => 'China', 'code' => 'cn'],
        ['country' => 'Colombia', 'code' => 'co'],
        ['country' => 'Costa Rica', 'code' => 'cr'],
        ['country' => 'Serbia', 'code' => 'cs'],
        ['country' => 'Cuba', 'code' => 'cu'],
        ['country' => 'Cape Verde', 'code' => 'cv'],
        ['country' => 'Christmas Island', 'code' => 'cx'],
        ['country' => 'Cyprus', 'code' => 'cy'],
        ['country' => 'Czech Republic', 'code' => 'cz'],
        ['country' => 'Germany', 'code' => 'de'],
        ['country' => 'Djibouti', 'code' => 'dj'],
        ['country' => 'Denmark', 'code' => 'dk'],
        ['country' => 'Dominica', 'code' => 'dm'],
        ['country' => 'Dominican Republic', 'code' => 'do'],
        ['country' => 'Algeria', 'code' => 'dz'],
        ['country' => 'Ecuador', 'code' => 'ec'],
        ['country' => 'Estonia', 'code' => 'ee'],
        ['country' => 'Egypt', 'code' => 'eg'],
        ['country' => 'Western Sahara', 'code' => 'eh'],
        ['country' => 'Eritrea', 'code' => 'er'],
        ['country' => 'Spain', 'code' => 'es'],
        ['country' => 'Ethiopia', 'code' => 'et'],
        ['country' => 'Finland', 'code' => 'fi'],
        ['country' => 'Fiji', 'code' => 'fj'],
        ['country' => 'Falkland Islands', 'code' => 'fk'],
        ['country' => 'Micronesia', 'code' => 'fm'],
        ['country' => 'Faroe Islands', 'code' => 'fo'],
        ['country' => 'France', 'code' => 'fr'],
        ['country' => 'Gabon', 'code' => 'ga'],
        ['country' => 'United Kingdom', 'code' => 'gb uk'],
        ['country' => 'England', 'code' => 'gb eng'],
        ['country' => 'Scotland', 'code' => 'gb sct'],
        ['country' => 'Wales', 'code' => 'gb wls'],
        ['country' => 'Grenada', 'code' => 'gd'],
        ['country' => 'Georgia', 'code' => 'ge'],
        ['country' => 'French Guiana', 'code' => 'gf'],
        ['country' => 'Ghana', 'code' => 'gh'],
        ['country' => 'Gibraltar', 'code' => 'gi'],
        ['country' => 'Greenland', 'code' => 'gl'],
        ['country' => 'Gambia', 'code' => 'gm'],
        ['country' => 'Guinea', 'code' => 'gn'],
        ['country' => 'Guadeloupe', 'code' => 'gp'],
        ['country' => 'Equatorial Guinea', 'code' => 'gq'],
        ['country' => 'Greece', 'code' => 'gr'],
        ['country' => 'Sandwich Islands', 'code' => 'gs'],
        ['country' => 'Guatemala', 'code' => 'gt'],
        ['country' => 'Guam', 'code' => 'gu'],
        ['country' => 'Guinea-bissau', 'code' => 'gw'],
        ['country' => 'Guyana', 'code' => 'gy'],
        ['country' => 'Hong Kong	', 'code' => 'hk'],
        ['country' => 'Heard Island', 'code' => 'hm'],
        ['country' => 'Honduras', 'code' => 'hn'],
        ['country' => 'Croatia', 'code' => 'hr'],
        ['country' => 'Haiti', 'code' => 'ht'],
        ['country' => 'Hungary', 'code' => 'hu'],
        ['country' => 'Indonesia', 'code' => 'id'],
        ['country' => 'Ireland', 'code' => 'ie'],
        ['country' => 'Israel', 'code' => 'il'],
        ['country' => 'India', 'code' => 'in'],
        ['country' => 'Indian Ocean Territory', 'code' => 'io'],
        ['country' => 'Iraq', 'code' => 'iq'],
        ['country' => 'Iran', 'code' => 'ir'],
        ['country' => 'Iceland', 'code' => 'is'],
        ['country' => 'Italy', 'code' => 'it'],
        ['country' => 'Jamaica', 'code' => 'jm'],
        ['country' => 'Jordan', 'code' => 'jo'],
        ['country' => 'Japan', 'code' => 'jp'],
        ['country' => 'Kenya', 'code' => 'ke'],
        ['country' => 'Kyrgyzstan', 'code' => 'kg'],
        ['country' => 'Cambodia', 'code' => 'kh'],
        ['country' => 'Kiribati', 'code' => 'ki'],
        ['country' => 'Comoros', 'code' => 'km'],
        ['country' => 'Saint Kitts And Nevis', 'code' => 'kn'],
        ['country' => 'North Korea', 'code' => 'kp'],
        ['country' => 'South Korea', 'code' => 'kr'],
        ['country' => 'Kuwait', 'code' => 'kw'],
        ['country' => 'Cayman Islands	', 'code' => 'ky'],
        ['country' => 'Kazakhstan', 'code' => 'kz'],
        ['country' => 'Laos', 'code' => 'la'],
        ['country' => 'Lebanon', 'code' => 'lb'],
        ['country' => 'Saint Lucia', 'code' => 'lc'],
        ['country' => 'Liechtenstein', 'code' => 'li'],
        ['country' => 'Sri Lanka', 'code' => 'lk'],
        ['country' => 'Liberia', 'code' => 'lr'],
        ['country' => 'Lesotho', 'code' => 'ls'],
        ['country' => 'Lithuania', 'code' => 'lt'],
        ['country' => 'Luxembourg', 'code' => 'lu'],
        ['country' => 'Latvia', 'code' => 'lv'],
        ['country' => 'Libya', 'code' => 'ly'],
        ['country' => 'Morocco', 'code' => 'ma'],
        ['country' => 'Monaco', 'code' => 'mc'],
        ['country' => 'Moldova', 'code' => 'md'],
        ['country' => 'Montenegro', 'code' => 'me'],
        ['country' => 'Madagascar', 'code' => 'mg'],
        ['country' => 'Marshall Islands', 'code' => 'mh'],
        ['country' => 'Macedonia', 'code' => 'mk'],
        ['country' => 'Mali', 'code' => 'ml'],
        ['country' => 'Burma', 'code' => 'mm'],
        ['country' => 'Mongolia', 'code' => 'mn'],
        ['country' => 'Macau', 'code' => 'mo'],
        ['country' => 'Northern Mariana Islands', 'code' => 'mp'],
        ['country' => 'Martinique', 'code' => 'mq'],
        ['country' => 'Mauritania', 'code' => 'mr'],
        ['country' => 'Montserrat', 'code' => 'ms'],
        ['country' => 'Malta', 'code' => 'mt'],
        ['country' => 'Mauritius', 'code' => 'mu'],
        ['country' => 'Maldives', 'code' => 'mv'],
        ['country' => 'Malawi', 'code' => 'mw'],
        ['country' => 'Mexico', 'code' => 'mx'],
        ['country' => 'Malaysia', 'code' => 'my'],
        ['country' => 'Mozambique', 'code' => 'mz'],
        ['country' => 'Namibia', 'code' => 'na'],
        ['country' => 'New Caledonia', 'code' => 'nc'],
        ['country' => 'Niger', 'code' => 'ne'],
        ['country' => 'Norfolk Island', 'code' => 'nf'],
        ['country' => 'Nigeria', 'code' => 'ng'],
        ['country' => 'Nicaragua', 'code' => 'ni'],
        ['country' => 'Netherlands', 'code' => 'nl'],
        ['country' => 'Norway', 'code' => 'no'],
        ['country' => 'Nepal', 'code' => 'np'],
        ['country' => 'Nauru', 'code' => 'nr'],
        ['country' => 'Niue', 'code' => 'nu'],
        ['country' => 'New Zealand', 'code' => 'nz'],
        ['country' => 'Oman', 'code' => 'om'],
        ['country' => 'Panama', 'code' => 'pa'],
        ['country' => 'Peru', 'code' => 'pe'],
        ['country' => 'French Polynesia', 'code' => 'pf'],
        ['country' => 'New Guinea', 'code' => 'pg'],
        ['country' => 'Philippines', 'code' => 'ph'],
        ['country' => 'Pakistan', 'code' => 'pk'],
        ['country' => 'Poland', 'code' => 'pl'],
        ['country' => 'Saint Pierre', 'code' => 'pm'],
        ['country' => 'Pitcairn Islands', 'code' => 'pn'],
        ['country' => 'Puerto Rico', 'code' => 'pr'],
        ['country' => 'Palestine', 'code' => 'ps'],
        ['country' => 'Portugal', 'code' => 'pt'],
        ['country' => 'Palau', 'code' => 'pw'],
        ['country' => 'Paraguay', 'code' => 'py'],
        ['country' => 'Qatar', 'code' => 'qa'],
        ['country' => 'Reunion', 'code' => 're'],
        ['country' => 'Romania', 'code' => 'ro'],
        ['country' => 'Serbia', 'code' => 'rs'],
        ['country' => 'Russia', 'code' => 'ru'],
        ['country' => 'Rwanda', 'code' => 'rw'],
        ['country' => 'Saudi Arabia', 'code' => 'sa'],
        ['country' => 'Solomon Islands', 'code' => 'sb'],
        ['country' => 'Seychelles', 'code' => 'sc'],
        ['country' => 'Sudan', 'code' => 'sd'],
        ['country' => 'Sweden', 'code' => 'se'],
        ['country' => 'Singapore', 'code' => 'sg'],
        ['country' => 'Saint Helena', 'code' => 'sh'],
        ['country' => 'Slovenia', 'code' => 'si'],
        ['country' => 'Jan Mayen', 'code' => 'sj'],
        ['country' => 'Slovakia', 'code' => 'sk'],
        ['country' => 'Sierra Leone', 'code' => 'sl'],
        ['country' => 'San Marino', 'code' => 'sm'],
        ['country' => 'Senegal', 'code' => 'sn'],
        ['country' => 'Somalia', 'code' => 'so'],
        ['country' => 'Suriname', 'code' => 'sr'],
        ['country' => 'Sao Tome', 'code' => 'st'],
        ['country' => 'El Salvador', 'code' => 'sv'],
        ['country' => 'Syria', 'code' => 'sy'],
        ['country' => 'Swaziland', 'code' => 'sz'],
        ['country' => 'Caicos Islands', 'code' => 'tc'],
        ['country' => 'Chad', 'code' => 'td'],
        ['country' => 'French Territories', 'code' => 'tf'],
        ['country' => 'Togo', 'code' => 'tg'],
        ['country' => 'Thailand', 'code' => 'th'],
        ['country' => 'Tajikistan', 'code' => 'tj'],
        ['country' => 'Tokelau', 'code' => 'tk'],
        ['country' => 'Timorleste', 'code' => 'tl'],
        ['country' => 'Turkmenistan', 'code' => 'tm'],
        ['country' => 'Tunisia', 'code' => 'tn'],
        ['country' => 'Tonga', 'code' => 'to'],
        ['country' => 'Turkey', 'code' => 'tr'],
        ['country' => 'Trinidad', 'code' => 'tt'],
        ['country' => 'Tuvalu', 'code' => 'tv'],
        ['country' => 'Taiwan', 'code' => 'tw'],
        ['country' => 'Tanzania', 'code' => 'tz'],
        ['country' => 'Ukraine', 'code' => 'ua'],
        ['country' => 'Uganda', 'code' => 'ug'],
        ['country' => 'Us Minor Islands', 'code' => 'um'],
        ['country' => 'United States', 'code' => 'us'],
        ['country' => 'Uruguay', 'code' => 'uy'],
        ['country' => 'Uzbekistan', 'code' => 'uz'],
        ['country' => 'Vatican City', 'code' => 'va'],
        ['country' => 'Saint Vincent', 'code' => 'vc'],
        ['country' => 'Venezuela', 'code' => 've'],
        ['country' => 'British Virgin Islands', 'code' => 'vg'],
        ['country' => 'Us Virgin Islands', 'code' => 'vi'],
        ['country' => 'Vietnam', 'code' => 'vn'],
        ['country' => 'Vanuatu', 'code' => 'vu'],
        ['country' => 'Wallis And Futuna', 'code' => 'wf'],
        ['country' => 'Samoa', 'code' => 'ws'],
        ['country' => 'Yemen', 'code' => 'ye'],
        ['country' => 'Mayotte', 'code' => 'yt'],
        ['country' => 'South Africa', 'code' => 'za'],
        ['country' => 'Zambia', 'code' => 'zm'],
        ['country' => 'Zimbabwe', 'code' => 'zw'],
    ]; ?>

    <div class="flex flex-col mx-auto w-1/12"> <svg xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="w-6 h-6">
            <path strokeLinecap="round" strokeLinejoin="round"
                d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
        </svg>
        <div class="font-bold text-3xl flex justify-center">
            <h1>Registration</h1>
        </div>
    </div>

    <div
        class="bg-white mt-10 dark:bg-slate-800 rounded-lg  ring-1 ring-slate-900/5 shadow-xl border-x-4 flex w-2/4 flex-col mx-auto">
        <div class=" text-black flex gap-4 text-center w-full bg-gray-300 rounded-full">

            <div class="w-full flex p-2 gap-2 ">
                <div class="bg-white text-black w-6 rounded-full p-1 text-xs ">1</div>
                <div> Personal</div>
            </div>
            <div class="flex p-2 gap-2 w-full">
                <div class="bg-white text-black w-6 rounded-full p-1 text-xs ">2</div>
                <div>Contact </div>
            </div>
            <div class="bg-blue-900 rounded-full text-white flex p-2 gap-2 w-full">
                <div class="bg-white text-black w-6 rounded-full p-1 text-xs ">3</div>Address
            </div>
            <div class="flex p-2 gap-2 w-full">
                <div class="bg-white text-black w-6 rounded-full p-1 text-xs ">4</div>Contact
            </div>
            <div class="flex p-2 gap-2 w-full">
                <div class="bg-white text-black w-6 rounded-full p-1 text-xs ">5</div>Document
            </div>
        </div>
        <form action="/registerscl4" class=" flex-col flex gap-4 w-full signup-form px-10 py-8">
            @csrf
            <div class="text-xl font-bold">
                <h1></h1>Permanent Address</h1>
            </div>


            <div class="flex row w-full justify-between">
                <div>
                    <label for="House">House No.</label>
                    <x-bladewind.input name="House" type="text" required="true" id="House" class="rounded-md"
                        error_message="House no. is required" onfocus="changeCss('.House', '!border-2,!border-red-400')"
                        onblur="changeCss('.House', '!border-2,!border-red-400', 'remove')" />

                </div>
                <div class="w-3/5">
                    <label for="Street">Street Address</label>
                    <x-bladewind.input name="Street" type="text" required="true" id="Street" class="rounded-md"
                        error_message="Street Adress is required"
                        onfocus="changeCss('.Street', '!border-2,!border-red-400')"
                        onblur="changeCss('.Street', '!border-2,!border-red-400', 'remove')" />
                </div>
            </div>

            <div class="flex row w-full justify-between">
                <div class="w-3/5">
                    <label for="Barangay"> Barangay</label>
                    <x-bladewind.input name="Barangay" type="text" required="true" id="Barangay" class="rounded-md"
                        error_message="Barangay is required"
                        onfocus="changeCss('.Barangay', '!border-2,!border-red-400')"
                        onblur="changeCss('.Barangay', '!border-2,!border-red-400', 'remove')" />

                </div>

                <div>
                    <label for="City">City</label>
                    <x-bladewind.input name="City" type="text" required="true" id="City" class="rounded-md"
                        error_message="City is required" onfocus="changeCss('.City', '!border-2,!border-red-400')"
                        onblur="changeCss('.City', '!border-2,!border-red-400', 'remove')" />

                </div>
            </div>
            <div class="flex row w-full justify-between">
                <div class="w-3/5"><label for="Province">Province</label>
                    <x-bladewind.input name="Province" type="text" required="true" id="Province" class="rounded-md"
                        error_message="Province is required"
                        onfocus="changeCss('.Province', '!border-2,!border-red-400')"
                        onblur="changeCss('.Province', '!border-2,!border-red-400', 'remove')" />
                </div>
                <div>
                    <label for="Region">Region</label>
                    <x-bladewind.input name="Region" type="text" required="true" id="Region" class="rounded-md"
                        error_message="Region is required" onfocus="changeCss('.Region', '!border-2,!border-red-400')"
                        onblur="changeCss('Region', '!border-2,!border-red-400', 'remove')" />

                </div>
            </div>
            <div class="flex row w-full justify-between">
                <div class="w-5/12">
                    <label for="Zip_Code" class="">Zip Code</label>
                    <x-bladewind.input name="Zip_Code" type="text" required="true" id="Zip_Code"
                        class="rounded-md" error_message="Zip Code is required"
                        onfocus="changeCss('.Zip_Code', '!border-2,!border-red-400')"
                        onblur="changeCss('Zip_Code', '!border-2,!border-red-400', 'remove')" />
                </div>
                <div>
                    <div class="flex flex-col w-64">
                        <label for="Country" class="">Country</label>
                        <x-bladewind.dropdown name="country" label_key="country" value_key="code" flag_key="code"
                            :data="$countries" searchable="true" id="Country" class="rounded-md" />

                    </div>
                </div>
            </div>

            <div class="text-xl font-bold">
                <h1>Company Address</h1>
            </div>


            <div class="flex row w-full justify-between">
                <div>
                    <label for="House">Company Landmark</label>
                    <x-bladewind.input name="House" type="text" required="true" id="House"
                        class="rounded-md" error_message="House no. is required"
                        onfocus="changeCss('.House', '!border-2,!border-red-400')"
                        onblur="changeCss('.House', '!border-2,!border-red-400', 'remove')" />

                </div>
                <div class="w-3/5">
                    <label for="Street">Street Address</label>
                    <x-bladewind.input name="Street" type="text" required="true" id="Street"
                        class="rounded-md" error_message="Street Adress is required"
                        onfocus="changeCss('.Street', '!border-2,!border-red-400')"
                        onblur="changeCss('.Street', '!border-2,!border-red-400', 'remove')" />
                </div>
            </div>

            <div class="flex row w-full justify-between">
                <div class="w-3/5">
                    <label for="Barangay">Barangay</label>
                    <x-bladewind.input name="Barangay" type="text" required="true" id="Barangay"
                        class="rounded-md" error_message="Barangay is required"
                        onfocus="changeCss('.Barangay', '!border-2,!border-red-400')"
                        onblur="changeCss('.Barangay', '!border-2,!border-red-400', 'remove')" />

                </div>

                <div>
                    <label for="City">City</label>
                    <x-bladewind.input name="City" type="text" required="true" id="City"
                        class="rounded-md" error_message="City is required"
                        onfocus="changeCss('.Surname', '!border-2,!border-red-400')"
                        onblur="changeCss('City', '!border-2,!border-red-400', 'remove')" />

                </div>
            </div>
            <div class="flex row w-full justify-between">
                <div class="w-3/5"><label for="Province">Province</label>
                    <x-bladewind.input name="Province" type="text" required="true" id="Province"
                        class="rounded-md" error_message="Province is required"
                        onfocus="changeCss('.Province', '!border-2,!border-red-400')"
                        onblur="changeCss('Province', '!border-2,!border-red-400', 'remove')" />
                </div>
                <div>
                    <label for="Region">Region</label>
                    <x-bladewind.input name="Region" type="text" required="true" id="Region"
                        class="rounded-md" error_message="Region is required"
                        onfocus="changeCss('.Region', '!border-2,!border-red-400')"
                        onblur="changeCss('Region', '!border-2,!border-red-400', 'remove')" />

                </div>
            </div>
            <div class="flex row w-full justify-between">
                <div class="w-5/12">
                    <label for="Zip_Code" class="">Zip Code</label>
                    <x-bladewind.input name="Province" type="text" required="true" id="Zip_Code"
                        class="rounded-md" error_message="Zip Code is required"
                        onfocus="changeCss('.Zip_Code', '!border-2,!border-red-400')"
                        onblur="changeCss('Zip_Code', '!border-2,!border-red-400', 'remove')" />
                </div>
                <div>
                    <div class="flex flex-col w-64">
                        <label for="Country" class="">Country</label>
                        <x-bladewind.dropdown name="country" label_key="country" value_key="code" flag_key="code"
                            :data="$countries" searchable="true" id="Country" class="rounded-md" />

                    </div>
                </div>
            </div>

            <div class="flex w-full justify-center gap-5 ">

                <x-bladewind::button size="small" color="black" can_submit="true" name="btn-save"
                    has_spinner="true" onclick="showModal('success')">Save As Draft </x-bladewind.button>

                    <x-bladewind::button size="small" color="black" can_submit="true" name="btn-save"
                        has_spinner="true" onclick="showModal('Continue')">Next </x-bladewind.button>
            </div>
        </form>
    </div>





</body>

</html>

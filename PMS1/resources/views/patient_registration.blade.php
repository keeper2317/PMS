<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syncore Medical Hospital</title>
    <link rel="icon" href="/build/assets/syncore.png">

    <!-- <link type="text/css" rel="stylesheet" href="https://cdn01.jotfor.ms/stylebuilder/static/form-common.css?v=80facca" /> -->
    <style type="text/css">
        @media print {
            * {
                -webkit-print-color-adjust: exact !important;
                color-adjust: exact !important;
            }

            .form-section {
                display: inline !important
            }

            .form-pagebreak {
                display: none !important
            }

            .form-section-closed {
                height: auto !important
            }

            .page-section {
                position: initial !important
            }
        }
    </style>
    <link type="text/css" rel="stylesheet"
        href="https://cdn02.jotfor.ms/themes/CSS/5e6b428acc8c4e222d1beb91.css?v=3.3.55928&themeRevisionID=63997999613766562e95ef1b" />
    <!-- <link type="text/css" rel="stylesheet" href="https://cdn03.jotfor.ms/css/styles/payment/payment_styles.css?3.3.55928" />
    <link type="text/css" rel="stylesheet" href="https://cdn01.jotfor.ms/css/styles/payment/payment_feature.css?3.3.55928" /> -->

    <style type="text/css" id="form-designer-style">
        /* Injected CSS Code */
        /*PREFERENCES STYLE*/
        .form-all {
            font-family: Lato, Helvetica, sans-serif sans-serif;
        }

        .form-line {
            margin-top: 12px 36px 12px 36px px;
            margin-bottom: 12px 36px 12px 36px px;
        }

        .form-all {
            max-width: 752px;
            width: 100%;
        }

        .form-label.form-label-left,
        .form-label.form-label-right,
        .form-label.form-label-left.form-label-auto,
        .form-label.form-label-right.form-label-auto {
            width: 230px;
        }

        .form-all {
            font-size: 16px
        }

        .supernova .form-all,
        .form-all {
            background-color: #fff;
        }

        .form-all {
            color: #2C3345;
        }

        .form-header-group .form-header {
            color: #2C3345;
        }

        .form-header-group .form-subHeader {
            color: #2C3345;
        }

        .form-label-top,
        .form-label-left,
        .form-label-right,
        .form-html,
        .form-checkbox-item label,
        .form-radio-item label,
        span.FITB .qb-checkbox-label,
        span.FITB .qb-radiobox-label,
        span.FITB .form-radio label,
        span.FITB .form-checkbox label,
        [data-blotid][data-type=checkbox] [data-labelid],
        [data-blotid][data-type=radiobox] [data-labelid],
        span.FITB-inptCont[data-type=checkbox] label,
        span.FITB-inptCont[data-type=radiobox] label {
            color: #2C3345;
        }

        .form-sub-label {
            color: #464d5f;
        }

        .supernova {
            background-color: #f8e71c;
        }

        .supernova body {
            background: transparent;
        }

        .form-textbox,
        .form-textarea,
        .form-dropdown,
        .form-radio-other-input,
        .form-checkbox-other-input,
        .form-captcha input,
        .form-spinner input {
            background-color: #fff;
        }


        .supernova {
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            background-position: center top;
        }

        .supernova,
        #stage {
            background-image: none;
        }

        .form-all {
            background-image: none;
        }

        /*PREFERENCES STYLE*/
        /*__INSPECT_SEPERATOR__*/
        .supernova {
            background-image: linear-gradient(#f5f9f9, #87e3da);
            background-attachment: fixed;
        }

        .form-all {
            box-shadow: 0 0 32px rgba(42, 42, 42, 0.16);
        }

        /* .form-all,
        #stage .formPage-stage.form-all,
        .form-section.page-section {
            border-radius: 6px;
        } */

        .form-label.form-label-auto {

            display: block;
            float: none;
            text-align: left;
            width: 100%;

        }

        /* Injected CSS Code */
    </style>

</head>

<body>
    @if (session('success'))
    <div id="confirmationMessage" class="confirmation-message">
        <p>{{ session('success') }}</p>
        <button id="okayButton">Okay</button>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var confirmationMessage = document.getElementById('confirmationMessage');
            var okayButton = document.getElementById('okayButton');

            if (confirmationMessage) {
                okayButton.addEventListener('click', function() {
                    confirmationMessage.style.display = 'none'; // Hide the message
                });
            }
        });
    </script>

    <style>
        .confirmation-message {
            background-color: #d4edda;
            color: #155724;
            padding: 15px;
            border: 1px solid #c3e6cb;
            border-radius: 4px;
            margin-bottom: 15px;
        }
        #okayButton {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
        }
        #okayButton:hover {
            background-color: #218838;
        }
    </style>
@endif
    <form class="jotform-form" onsubmit="" action="/store" method="POST" name="" id=""
        accept-charset="utf-8" autocomplete="on">
        @csrf
        <!-- <input type="hidden" name="formID" value="242195735928468" />
        <input type="hidden" id="JWTContainer" value="" />
        <input type="hidden" id="cardinalOrderNumber" value="" />
        <input type="hidden" id="jsExecutionTracker" name="jsExecutionTracker" value="build-date-1723175856338" />
        <input type="hidden" id="submitSource" name="submitSource" value="unknown" />
        <input type="hidden" id="buildDate" name="buildDate" value="1723175856338" /> -->
        <div role="main" class="form-all">
            <ul class="form-section page-section">
                <li id="cid_322" class="form-input-wide" data-type="control_head">
                    <div class="form-header-group  header-large">
                        <div class="header-text httac htvam">
                            <h1 id="header_322" class="form-header" data-component="header">NEW PATIENT REGISTRATION
                                FORM</h1>
                            <div id="subHeader_322" class="form-subHeader">Syncore Medical Hospital</div>
                        </div>
                    </div>
                </li>
                <li class="form-line" data-type="control_radio" id="id_303"><label class="form-label form-label-top"
                        id="label_303" aria-hidden="true"> </label>
                    <div id="cid_303" class="form-input-wide" data-layout="full">
                        <div class="form-multiple-column" data-columncount="2" role="group"
                            aria-labelledby="label_303" data-component="radio"><span class="form-radio-item"><span
                                    class="dragger-item"></span><input type="radio" aria-describedby="label_303"
                                    class="form-radio" id="input_303_0" name="patient_type" checked=""
                                    value="Out Patient" /><label id="label_input_303_0" for="input_303_0">Out
                                    Patient</label></span><span class="form-radio-item"><span
                                    class="dragger-item"></span><input type="radio" aria-describedby="label_303"
                                    class="form-radio" id="input_303_1" name="patient_type" value="In Patient" /><label
                                    id="label_input_303_1" for="input_303_1">In Patient</label></span>
                                </div>
                                @if ($errors->has('patient_type'))
                                    @foreach ($errors->get('patient_type') as $error)
                                        <span style="color:red;">{{ $error }}</span><br>
                                    @endforeach
                                @endif
                    </div>
                </li>
                <li class="form-line jf-required" data-type="control_fullname" id="id_3"
                    data-compound-hint="First Name,Middle Name,Last Name ,Ext."><label
                        class="form-label form-label-top form-label-extended form-label-auto" id="label_3"
                        for="first_3" aria-hidden="false"> Patient Name<span class="form-required">*</span> </label>
                    <div id="cid_3" class="form-input-wide jf-required" data-layout="full">
                        <div data-wrapper-react="true" class="extended"><span class="form-sub-label-container"
                                style="vertical-align:top" data-input-type="first"><input type="text"
                                    id="first_3" name="first_name"
                                    class="form-textbox validate[required]" data-defaultvalue=""
                                    autoComplete="section-input_3 given-name" size="10" placeholder="First Name"
                                    data-component="first" aria-labelledby="label_3" required=""
                                    value="" />
                                    @if ($errors->has('first_name'))
                                        @foreach ($errors->get('first_name') as $error)
                                            <span style="color:red;">{{ $error }}</span><br>
                                        @endforeach
                                    @endif
                                </span><span class="form-sub-label-container"
                                style="vertical-align:top" data-input-type="middle"><input type="text"
                                    id="middle_3" name="middle_name" class="form-textbox"
                                    data-defaultvalue="" autoComplete="section-input_3 additional-name"
                                    size="10" placeholder="Middle Name" data-component="middle"
                                    aria-labelledby="label_3" required="" value="" />
                                    @if ($errors->has('middle_name'))
                                        @foreach ($errors->get('middle_name') as $error)
                                            <span style="color:red;">{{ $error }}</span><br>
                                        @endforeach
                                    @endif
                                </span><span
                                class="form-sub-label-container" style="vertical-align:top"
                                data-input-type="last"><input type="text" id="last_3"
                                    name="last_name" class="form-textbox validate[required]"
                                    data-defaultvalue="" autoComplete="section-input_3 family-name" size="15"
                                    placeholder="Last Name " data-component="last" aria-labelledby="label_3"
                                    required="" value="" />
                                    @if ($errors->has('last_name'))
                                        @foreach ($errors->get('last_name') as $error)
                                            <span style="color:red;">{{ $error }}</span><br>
                                        @endforeach
                                    @endif
                                </span><span class="form-sub-label-container"
                                style="vertical-align:top" data-input-type="suffix"><input type="text"
                                    id="suffix_3" name="extension" class="form-textbox"
                                    data-defaultvalue="" autoComplete="section-input_3 honorific-suffix"
                                    size="4" placeholder="Ext." data-component="suffix"
                                    aria-labelledby="label_3" value="" /></span></div>
                    </div>
                </li>
                <li class="form-line form-line-column form-col-1 jf-required" data-type="control_dropdown"
                    id="id_231"><label class="form-label form-label-top form-label-auto" id="label_231"
                        for="input_231" aria-hidden="false"> Sex<span class="form-required">*</span> </label>
                    <div id="cid_231" class="form-input-wide jf-required" data-layout="half"> <select
                            class="form-dropdown validate[required]" id="input_231" name="sex"
                            style="width:310px" data-component="dropdown" required="" aria-label="Sex">
                            <option value="">Please Select</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Intersex">Intersex</option>
                            <option value="Non-Binary">Non-Binary</option>
                            <option value="Transgender Female (MTF)">Transgender Female (MTF)</option>
                            <option value="Transgender Male (FTM)">Transgender Male (FTM)</option>
                            <option value="Prefer Not to Say">Prefer Not to Say</option>
                        </select>
                        @if ($errors->has('sex'))
                            @foreach ($errors->get('sex') as $error)
                                <span style="color:red;">{{ $error }}</span><br>
                            @endforeach
                        @endif
                    </div>
                </li>
                <li class="form-line form-line-column form-col-2 jf-required" data-type="control_dropdown"
                    id="id_232"><label class="form-label form-label-top form-label-auto" id="label_232"
                        for="input_232" aria-hidden="false"> Civil Status<span class="form-required">*</span>
                    </label>
                    <div id="cid_232" class="form-input-wide jf-required" data-layout="half"> <select
                            class="form-dropdown validate[required]" id="input_232" name="civil_status"
                            style="width:310px" data-component="dropdown" required="" aria-label="Civil Status">
                            <option value="">Please Select</option>
                            <option value="Single">Single</option>
                            <option value="Married">Married</option>
                            <option value="Divorced">Divorced</option>
                            <option value="Legally separated">Legally separated</option>
                            <option value="Widowed">Widowed</option>
                            <option value="Other">Other</option>
                        </select>
                        @if ($errors->has('civil_status'))
                            @foreach ($errors->get('civil_status') as $error)
                                <span style="color:red;">{{ $error }}</span><br>
                            @endforeach
                        @endif
                    </div>
                </li>
                <li class="form-line form-line-column form-col-3 jf-required" data-type="control_datetime" id="id_333">
                    <label class="form-label form-label-top" id="label_333" for="lite_mode_333" aria-hidden="false"> Date of Birth<span class="form-required">*</span> </label>
                    <div id="cid_333" class="form-input-wide jf-required" data-layout="half">
                        <div data-wrapper-react="true">
                            <span class="form-sub-label-container" style="vertical-align:top">
                                <input type="text"
                                    class="form-textbox validate[required, limitDate, validateLiteDate]"
                                    id="lite_mode_333" name="dob" size="12" data-maxlength="12" maxLength="12"
                                    data-age="" value="" required="" data-format="mmddyyyy"
                                    data-seperator="-" placeholder="MM-DD-YYYY" data-placeholder="MM-DD-YYYY"
                                    autoComplete="off" aria-labelledby="label_333" />
                                <img class="newDefaultTheme-dateIcon icon-liteMode" alt="Pick a Date"
                                    id="input_333_pick" src="https://cdn.jotfor.ms/images/calendar.png"
                                    data-component="datetime" aria-hidden="true" data-allow-time="No"
                                    data-version="v2" />
                                <label class="form-sub-label is-empty" for="lite_mode_333"
                                    id="sublabel_333_litemode" style="min-height:13px"></label>

                                @if ($errors->has('dob'))
                                    @foreach ($errors->get('dob') as $error)
                                        <span style="color:red;">{{ $error }}</span><br>
                                    @endforeach
                                @endif
                            </span>
                        </div>
                    </div>
                </li>
                <li class="form-line form-line-column form-col-4 jf-required" data-type="control_dropdown"
                    id="id_336"><label class="form-label form-label-top" id="label_336" for="input_336"
                        aria-hidden="false"> Employment<span class="form-required">*</span> </label>
                    <div id="cid_336" class="form-input-wide jf-required" data-layout="half"> <select
                            class="form-dropdown validate[required]" id="input_336" name="employment"
                            style="width:310px" data-component="dropdown" required="" aria-label="Employment">
                            <option value="">Please Select</option>
                            <option value="Employed">Employed</option>
                            <option value="Self-Employed">Self-Employed</option>
                            <option value="Unemployed">Unemployed</option>
                            <option value="Retired">Retired</option>
                            <option value="Student">Student</option>
                            <option value="Other">Other</option>
                        </select>
                    @if ($errors->has('employment'))
                        @foreach ($errors->get('employment') as $error)
                            <span style="color:red;">{{ $error }}</span><br>
                        @endforeach
                    @endif
                    </div>
                </li>
                <li class="form-line form-line-column form-col-5 jf-required" data-type="control_phone"
                    id="id_235"><label class="form-label form-label-top form-label-auto" id="label_235"
                        for="input_235_full"> Phone Number<span class="form-required">*</span> </label>
                    <div id="cid_235" class="form-input-wide jf-required" data-layout="half"> <span
                            class="form-sub-label-container" style="vertical-align:top"><input type="tel"
                                id="input_235_full" name="phone" data-type="mask-number"
                                class="mask-phone-number form-textbox validate[required, Fill Mask]"
                                data-defaultvalue="" autoComplete="section-input_235 tel" style="width:310px"
                                data-masked="true" placeholder="0000-000-0000" data-component="phone"
                                aria-labelledby="label_235" required="" value="" />
                                @if ($errors->has('phone'))
                                    @foreach ($errors->get('phone') as $error)
                                        <span style="color:red;">{{ $error }}</span><br>
                                    @endforeach
                                @endif
                            </span> </div>
                </li>
                <li class="form-line form-line-column form-col-6" data-type="control_email" id="id_281"><label
                        class="form-label form-label-top" id="label_281" for="input_281" aria-hidden="false"> Email
                    </label>
                    <div id="cid_281" class="form-input-wide" data-layout="half"> <input type="email"
                            id="input_281" name="email" class="form-textbox validate[Email]"
                            data-defaultvalue="" autoComplete="section-input_281 email" style="width:310px"
                            size="310" placeholder="e.g. example@example.com" data-component="email"
                            aria-labelledby="label_281" value="" />
                            @if ($errors->has('email'))
                                @foreach ($errors->get('email') as $error)
                                    <span style="color:red;">{{ $error }}</span><br>
                                @endforeach
                            @endif
                         </div>
                </li>
                <li class="form-line form-line-column form-col-1 jf-required" data-type="control_textbox"
                    id="id_328"><label class="form-label form-label-top" id="label_328" for="input_328"
                        aria-hidden="false"> Nationality<span class="form-required">*</span> </label>
                    <div id="cid_328" class="form-input-wide jf-required" data-layout="half"> <input
                            type="text" id="input_328" name="nationality" data-type="input-textbox"
                            class="form-textbox validate[required, Alphabetic]" data-defaultvalue=""
                            style="width:310px" size="310" placeholder="Nationality" data-component="textbox"
                            aria-labelledby="label_328" required="" value="" />
                        @if ($errors->has('nationality'))
                            @foreach ($errors->get('nationality') as $error)
                                <span style="color:red;">{{ $error }}</span><br>
                            @endforeach
                        @endif
                        </div>
                </li>
                <li class="form-line form-line-column form-col-1 jf-required" data-type="control_textbox"
                    id="id_328"><label class="form-label form-label-top" id="label_328" for="input_328"
                        aria-hidden="false"> Religion<span class="form-required">*</span> </label>
                    <div id="cid_328" class="form-input-wide jf-required" data-layout="half"> <input
                            type="text" id="input_328" name="religion" data-type="input-textbox"
                            class="form-textbox validate[required, Alphabetic]" data-defaultvalue=""
                            style="width:310px" size="310" placeholder="Religion" data-component="textbox"
                            aria-labelledby="label_328" required="" value="" />
                        @if ($errors->has('religion'))
                            @foreach ($errors->get('religion') as $error)
                                <span style="color:red;">{{ $error }}</span><br>
                            @endforeach
                        @endif
                        </div>
                </li>
                <li class="form-line jf-required" data-type="control_address" id="id_234"
                    data-compound-hint="Street Address,Street Address 2,City,State / Province,,ZIP / Postal Code,Please Select,">
                    <label class="form-label form-label-top form-label-auto" id="label_234"
                        for="input_234_addr_line1" aria-hidden="false"> Permanent Address<span
                            class="form-required">*</span> </label>
                    <div id="cid_234" class="form-input-wide jf-required" data-layout="full">
                        <div summary="" class="form-address-table jsTest-addressField">
                            <div class="form-address-line-wrapper jsTest-address-line-wrapperField"><span
                                    class="form-address-line form-address-street-line jsTest-address-lineField"><span
                                        class="form-sub-label-container" style="vertical-align:top"><input
                                            type="text" id="input_234_addr_line1"
                                            name="street_address"
                                            class="form-textbox validate[required] form-address-line"
                                            data-defaultvalue="" autoComplete="section-input_234 address-line1"
                                            placeholder="Street Address" data-component="address_line_1"
                                            aria-labelledby="label_234" required=""
                                            value="" />
                                            @if ($errors->has('street_address'))
                                                @foreach ($errors->get('street_address') as $error)
                                                    <span style="color:red;">{{ $error }}</span><br>
                                                @endforeach
                                            @endif
                                        </span></span></div>
                            <div class="form-address-line-wrapper jsTest-address-line-wrapperField"><span
                                    class="form-address-line form-address-street-line jsTest-address-lineField"><span
                                        class="form-sub-label-container" style="vertical-align:top"><input
                                            type="text" id="input_234_addr_line2"
                                            name="street_address_2" class="form-textbox form-address-line"
                                            data-defaultvalue="" autoComplete="section-input_234 address-line2"
                                            placeholder="Street Address 2" data-component="address_line_2"
                                            aria-labelledby="label_234" value="" />
                                            @if ($errors->has('street_address_2'))
                                                @foreach ($errors->get('street_address_2') as $error)
                                                    <span style="color:red;">{{ $error }}</span><br>
                                                @endforeach
                                            @endif
                                        </span></span></div>
                            <div class="form-address-line-wrapper jsTest-address-line-wrapperField"><span
                                    class="form-address-line form-address-city-line jsTest-address-lineField "><span
                                        class="form-sub-label-container" style="vertical-align:top"><input
                                            type="text" id="input_234_city" name="city"
                                            class="form-textbox validate[required] form-address-city"
                                            data-defaultvalue="" autoComplete="section-input_234 address-level2"
                                            placeholder="City" data-component="city" aria-labelledby="label_234"
                                            required="" value="" />
                                            @if ($errors->has('city'))
                                                @foreach ($errors->get('city') as $error)
                                                    <span style="color:red;">{{ $error }}</span><br>
                                                @endforeach
                                            @endif
                                        </span></span><span
                                    class="form-address-line form-address-state-line jsTest-address-lineField "><span
                                        class="form-sub-label-container" style="vertical-align:top"><input
                                            type="text" id="input_234_state" name="state"
                                            class="form-textbox validate[required] form-address-state"
                                            data-defaultvalue="" autoComplete="section-input_234 address-level1"
                                            placeholder="State / Province" data-component="state"
                                            aria-labelledby="label_234" required=""
                                            value="" />
                                            @if ($errors->has('state'))
                                                @foreach ($errors->get('state') as $error)
                                                    <span style="color:red;">{{ $error }}</span><br>
                                                @endforeach
                                            @endif
                                        </span></span></div>
                            <div class="form-address-line-wrapper jsTest-address-line-wrapperField"><span
                                    class="form-address-line form-address-zip-line jsTest-address-lineField "><span
                                        class="form-sub-label-container" style="vertical-align:top"><input
                                            type="text" id="input_234_postal" name="zip"
                                            class="form-textbox validate[required] form-address-postal"
                                            data-defaultvalue="" autoComplete="section-input_234 postal-code"
                                            placeholder="ZIP / Postal Code" data-component="zip"
                                            aria-labelledby="label_234" required=""
                                            value="" />
                                            @if ($errors->has('zip'))
                                                @foreach ($errors->get('zip') as $error)
                                                    <span style="color:red;">{{ $error }}</span><br>
                                                @endforeach
                                            @endif
                                        </span></span></div>
                        </div>
                    </div>
                </li>
                <li class="form-line jf-required" data-type="control_fullname" id="id_13"
                    data-compound-hint="First Name,Middle Name,Last Name"><label
                        class="form-label form-label-top form-label-extended" id="label_13" for="first_13"
                        aria-hidden="false"> Emergency Contact Person<span class="form-required">*</span> </label>
                    <div id="cid_13" class="form-input-wide jf-required" data-layout="full">
                        <div data-wrapper-react="true" class="extended"><span class="form-sub-label-container"
                                style="vertical-align:top" data-input-type="first"><input type="text"
                                    id="first_13" name="emergency_first_name"
                                    class="form-textbox validate[required]" data-defaultvalue=""
                                    autoComplete="section-input_13 given-name" size="10"
                                    placeholder="First Name" data-component="first" aria-labelledby="label_13"
                                    required="" value="" />
                                    @if ($errors->has('emergency_first_name'))
                                        @foreach ($errors->get('emergency_first_name') as $error)
                                            <span style="color:red;">{{ $error }}</span><br>
                                        @endforeach
                                    @endif
                                </span><span class="form-sub-label-container"
                                style="vertical-align:top" data-input-type="middle"><input type="text"
                                    id="middle_13" name="emergency_middle_name" class="form-textbox"
                                    data-defaultvalue="" autoComplete="section-input_13 additional-name"
                                    size="10" placeholder="Middle Name" data-component="middle"
                                    aria-labelledby="label_13" required="" value="" />
                                    @if ($errors->has('emergency_middle_name'))
                                        @foreach ($errors->get('emergency_middle_name') as $error)
                                            <span style="color:red;">{{ $error }}</span><br>
                                        @endforeach
                                    @endif
                                </span><span
                                class="form-sub-label-container" style="vertical-align:top"
                                data-input-type="last"><input type="text" id="last_13"
                                    name="emergency_last_name" class="form-textbox validate[required]"
                                    data-defaultvalue="" autoComplete="section-input_13 family-name" size="15"
                                    placeholder="Last Name" data-component="last" aria-labelledby="label_13"
                                    required="" value="" />
                                    @if ($errors->has('emergency_last_name'))
                                        @foreach ($errors->get('emergency_last_name') as $error)
                                            <span style="color:red;">{{ $error }}</span><br>
                                        @endforeach
                                    @endif
                                </span></div>
                    </div>
                </li>
                <li class="form-line form-line-column form-col-1 jf-required" data-type="control_textbox"
                    id="id_73"><label class="form-label form-label-top" id="label_73" for="input_73"
                        aria-hidden="false"> Relationship<span class="form-required">*</span> </label>
                    <div id="cid_73" class="form-input-wide jf-required" data-layout="half"> <input
                            type="text" id="input_73" name="relationship" data-type="input-textbox"
                            class="form-textbox validate[required]" data-defaultvalue="" style="width:310px"
                            size="310" placeholder=" e.g. Spouse, Guardian" data-component="textbox"
                            aria-labelledby="label_73" required="" value="" />
                            @if ($errors->has('relationship'))
                                @foreach ($errors->get('relationship') as $error)
                                    <span style="color:red;">{{ $error }}</span><br>
                                @endforeach
                            @endif
                        </div>
                </li>
                <li class="form-line form-line-column form-col-2 jf-required" data-type="control_phone"
                    id="id_279"><label class="form-label form-label-top" id="label_279" for="input_279_full">
                        Primary Contact<span class="form-required">*</span> </label>
                    <div id="cid_279" class="form-input-wide jf-required" data-layout="half"> <span
                            class="form-sub-label-container" style="vertical-align:top"><input type="tel"
                                id="input_279_full" name="emergency_phone" data-type="mask-number"
                                class="mask-phone-number form-textbox validate[required, Fill Mask]"
                                data-defaultvalue="" autoComplete="section-input_279 tel" style="width:310px"
                                data-masked="true" placeholder="0000-000-0000" data-component="phone"
                                aria-labelledby="label_279" required="" value="" />
                                @if ($errors->has('emergency_phone'))
                                    @foreach ($errors->get('emergency_phone') as $error)
                                        <span style="color:red;">{{ $error }}</span><br>
                                    @endforeach
                                @endif
                            </span> </div>
                </li>
                <li class="form-line form-line-column form-col-3" data-type="control_phone" id="id_335"><label
                        class="form-label form-label-top" id="label_335" for="input_335_full"> Secondary Contact
                    </label>
                    <div id="cid_335" class="form-input-wide" data-layout="half"> <span
                            class="form-sub-label-container" style="vertical-align:top"><input type="tel"
                                id="input_335_full" name="emergency_phone_2" data-type="mask-number"
                                class="mask-phone-number form-textbox validate[Fill Mask]" data-defaultvalue=""
                                autoComplete="section-input_335 tel" style="width:310px" data-masked="true"
                                placeholder="0000-000-0000" data-component="phone" aria-labelledby="label_335"
                                value="" />
                                @if ($errors->has('emergency_phone_2'))
                                    @foreach ($errors->get('emergency_phone_2') as $error)
                                        <span style="color:red;">{{ $error }}</span><br>
                                    @endforeach
                                @endif
                            </span> </div>
                </li>
                <li class="form-line form-line-column form-col-4" data-type="control_email" id="id_282"><label
                        class="form-label form-label-top" id="label_282" for="input_282" aria-hidden="false"> Email
                    </label>
                    <div id="cid_282" class="form-input-wide" data-layout="half"> <input type="email"
                            id="input_282" name="emergency_email" class="form-textbox validate[Email]"
                            data-defaultvalue="" autoComplete="section-input_282 email" style="width:310px"
                            size="310" placeholder="e.g. example@example.com" data-component="email"
                            aria-labelledby="label_282" value="" />
                                @if ($errors->has('emergency_email'))
                                    @foreach ($errors->get('emergency_email') as $error)
                                        <span style="color:red;">{{ $error }}</span><br>
                                    @endforeach
                                @endif
                        </div>
                </li>
                <li id="cid_265" class="form-input-wide" data-type="control_head">
                    <div class="form-header-group  header-default">
                        <div class="header-text httal htvam">
                            <h2 id="header_265" class="form-header" data-component="header">Health History</h2>
                        </div>
                    </div>
                </li>
                <li class="form-line fixed-width jf-required" data-type="control_textbox" id="id_252"><label
                        class="form-label form-label-top form-label-auto" id="label_252" for="input_252"
                        aria-hidden="false"> Reason for Registration<span class="form-required">*</span> </label>
                    <div id="cid_252" class="form-input-wide jf-required" data-layout="half"> <input
                            type="text" id="input_252" name="reason_registration" data-type="input-textbox"
                            class="form-textbox validate[required, AlphaNumeric, minCharLimit]" data-defaultvalue=""
                            style="width:620px" size="620" maxLength="300" data-minlength="1" placeholder=" "
                            data-component="textbox" aria-labelledby="label_252" required="" value="" />
                                @if ($errors->has('reason_registration'))
                                    @foreach ($errors->get('reason_registration') as $error)
                                        <span style="color:red;">{{ $error }}</span><br>
                                    @endforeach
                                @endif
                    </div>
                </li>
                <li class="form-line" data-type="control_textarea" id="id_255"><label
                        class="form-label form-label-top form-label-auto" id="label_255" for="input_255"
                        aria-hidden="false"> Additional Notes </label>
                    <div id="cid_255" class="form-input-wide" data-layout="full">
                        <textarea id="input_255" class="form-textarea" name="additional_note" style="width:648px;height:163px"
                            data-component="textarea" aria-labelledby="label_255"></textarea>
                    </div>
                </li>
                <li class="form-line jf-required" data-type="control_radio" id="id_296"><label
                        class="form-label form-label-top" id="label_296" aria-hidden="false"> Does the patient have
                        any history of hospitalization or surgical operation?<span class="form-required">*</span>
                    </label>
                    <div id="cid_296" class="form-input-wide jf-required" data-layout="full">
                        <div class="form-multiple-column" data-columncount="2" role="group"
                            aria-labelledby="label_296" data-component="radio"><span class="form-radio-item"><span
                                    class="dragger-item"></span><input type="radio" aria-describedby="label_296"
                                    class="form-radio validate[required]" id="input_296_0" name="history_operation"
                                    value="Yes" required="" /><label id="label_input_296_0"
                                    for="input_296_0">Yes</label></span><span class="form-radio-item"><span
                                    class="dragger-item"></span><input type="radio" aria-describedby="label_296"
                                    class="form-radio validate[required]" id="input_296_1" name="history_operation"
                                    value="No" required="" /><label id="label_input_296_1"
                                    for="input_296_1">No</label></span></div>
                                @if ($errors->has('history_operation'))
                                    @foreach ($errors->get('history_operation') as $error)
                                        <span style="color:red;">{{ $error }}</span><br>
                                    @endforeach
                                @endif
                    </div>
                </li>
                <li class="form-line" data-type="control_textarea" id="id_297"><label
                        class="form-label form-label-top" id="label_297" for="input_297" aria-hidden="false">
                        Specify </label>
                    <div id="cid_297" class="form-input-wide" data-layout="full">
                        <textarea id="input_297" class="form-textarea validate[AlphaNumeric]" name="history_note"
                            style="width:648px;height:130px" data-component="textarea" aria-labelledby="label_297"></textarea>
                    </div>
                    @if ($errors->has('history_note'))
                        @foreach ($errors->get('history_note') as $error)
                            <span style="color:red;">{{ $error }}</span><br>
                        @endforeach
                    @endif
                </li>
                <li class="form-line jf-required" data-type="control_radio" id="id_331"><label
                        class="form-label form-label-top" id="label_331" aria-hidden="false"> Does the patient have
                        any current condition<span class="form-required">*</span> </label>
                    <div id="cid_331" class="form-input-wide jf-required" data-layout="full">
                        <div class="form-multiple-column" data-columncount="2" role="group"
                            aria-labelledby="label_331" data-component="radio"><span class="form-radio-item"><span
                                    class="dragger-item"></span><input type="radio" aria-describedby="label_331"
                                    class="form-radio validate[required]" id="input_331_0" name="current_condition"
                                    value="Yes" required="" /><label id="label_input_331_0"
                                    for="input_331_0">Yes</label></span><span class="form-radio-item"><span
                                    class="dragger-item"></span><input type="radio" aria-describedby="label_331"
                                    class="form-radio validate[required]" id="input_331_1" name="current_condition"
                                    value="No" required="" /><label id="label_input_331_1"
                                    for="input_331_1">No</label></span></div>
                                @if ($errors->has('current_condition'))
                                    @foreach ($errors->get('current_condition') as $error)
                                        <span style="color:red;">{{ $error }}</span><br>
                                    @endforeach
                                @endif
                    </div>
                </li>
                <li class="form-line" data-type="control_textarea" id="id_332"><label
                        class="form-label form-label-top" id="label_332" for="input_332" aria-hidden="false">
                        Specify </label>
                    <div id="cid_332" class="form-input-wide" data-layout="full">
                        <textarea id="input_332" class="form-textarea validate[AlphaNumeric]" name="condition_note"
                            style="width:648px;height:130px" data-component="textarea" aria-labelledby="label_332"></textarea>
                    </div>
                    @if ($errors->has('condition_note'))
                        @foreach ($errors->get('condition_note') as $error)
                            <span style="color:red;">{{ $error }}</span><br>
                        @endforeach
                    @endif
                </li>
                <li class="form-line jf-required" data-type="control_radio" id="id_43"><label
                        class="form-label form-label-top" id="label_43" aria-hidden="false"> Is the patient
                        currently taking any prescription or over-the-counter medications?<span
                            class="form-required">*</span> </label>
                    <div id="cid_43" class="form-input-wide jf-required" data-layout="full">
                        <div class="form-multiple-column" data-columncount="2" role="group"
                            aria-labelledby="label_43" data-component="radio"><span class="form-radio-item"><span
                                    class="dragger-item"></span><input type="radio" aria-describedby="label_43"
                                    class="form-radio validate[required]" id="input_43_0" name="taking_medications"
                                    value="Yes" required="" /><label id="label_input_43_0"
                                    for="input_43_0">Yes</label></span><span class="form-radio-item"><span
                                    class="dragger-item"></span><input type="radio" aria-describedby="label_43"
                                    class="form-radio validate[required]" id="input_43_1" name="taking_medications"
                                    value="No" required="" /><label id="label_input_43_1"
                                    for="input_43_1">No</label></span></div>
                                    @if ($errors->has('taking_medications'))
                                        @foreach ($errors->get('taking_medications') as $error)
                                            <span style="color:red;">{{ $error }}</span><br>
                                        @endforeach
                                    @endif
                    </div>
                </li>
                <li class="form-line" data-type="control_textarea" id="id_22"><label
                        class="form-label form-label-top" id="label_22" for="input_22" aria-hidden="false"> Specify
                        Medications </label>
                    <div id="cid_22" class="form-input-wide" data-layout="full">
                        <textarea id="input_22" class="form-textarea validate[AlphaNumeric]" name="medications_note"
                            style="width:648px;height:130px" data-component="textarea" aria-labelledby="label_22"></textarea>
                    </div>
                    @if ($errors->has('medications_note'))
                        @foreach ($errors->get('medications_note') as $error)
                            <span style="color:red;">{{ $error }}</span><br>
                        @endforeach
                    @endif
                </li>
                <li class="form-line jf-required" data-type="control_radio" id="id_291"><label
                        class="form-label form-label-top" id="label_291" aria-hidden="false"> Is the patient have any
                        FOOD allergies?<span class="form-required">*</span> </label>
                    <div id="cid_291" class="form-input-wide jf-required" data-layout="full">
                        <div class="form-multiple-column" data-columncount="2" role="group"
                            aria-labelledby="label_291" data-component="radio"><span class="form-radio-item"><span
                                    class="dragger-item"></span><input type="radio" aria-describedby="label_291"
                                    class="form-radio validate[required]" id="input_291_0" name="food_allergy"
                                    value="Yes" required="" /><label id="label_input_291_0"
                                    for="input_291_0">Yes</label></span><span class="form-radio-item"><span
                                    class="dragger-item"></span><input type="radio" aria-describedby="label_291"
                                    class="form-radio validate[required]" id="input_291_1" name="food_allergy"
                                    value="No" required="" /><label id="label_input_291_1"
                                    for="input_291_1">No</label></span></div>
                    </div>
                    @if ($errors->has('food_allergy'))
                        @foreach ($errors->get('food_allergy') as $error)
                            <span style="color:red;">{{ $error }}</span><br>
                        @endforeach
                    @endif
                </li>
                <li class="form-line" data-type="control_textarea" id="id_295"><label
                        class="form-label form-label-top" id="label_295" for="input_295" aria-hidden="false">
                        Specify Food Allergies </label>
                    <div id="cid_295" class="form-input-wide" data-layout="full">
                        <textarea id="input_295" class="form-textarea validate[AlphaNumeric]" name="food_allergy_note"
                            style="width:648px;height:130px" data-component="textarea" aria-labelledby="label_295"></textarea>
                    </div>
                    @if ($errors->has('food_allergy_note'))
                        @foreach ($errors->get('food_allergy_note') as $error)
                            <span style="color:red;">{{ $error }}</span><br>
                        @endforeach
                    @endif
                </li>
                <li class="form-line jf-required" data-type="control_radio" id="id_293"><label
                        class="form-label form-label-top" id="label_293" aria-hidden="false"> Is the patient have any
                        DRUG allergies?<span class="form-required">*</span> </label>
                    <div id="cid_293" class="form-input-wide jf-required" data-layout="full">
                        <div class="form-multiple-column" data-columncount="2" role="group"
                            aria-labelledby="label_293" data-component="radio"><span class="form-radio-item"><span
                                    class="dragger-item"></span><input type="radio" aria-describedby="label_293"
                                    class="form-radio validate[required]" id="input_293_0" name="drug_allergy"
                                    value="Yes" required="" /><label id="label_input_293_0"
                                    for="input_293_0">Yes</label></span><span class="form-radio-item"><span
                                    class="dragger-item"></span><input type="radio" aria-describedby="label_293"
                                    class="form-radio validate[required]" id="input_293_1" name="drug_allergy"
                                    value="No" required="" /><label id="label_input_293_1"
                                    for="input_293_1">No</label></span></div>
                    </div>
                    @if ($errors->has('drug_allergy'))
                        @foreach ($errors->get('drug_allergy') as $error)
                            <span style="color:red;">{{ $error }}</span><br>
                        @endforeach
                    @endif
                </li>
                <li class="form-line" data-type="control_textarea" id="id_294"><label
                        class="form-label form-label-top" id="label_294" for="input_294" aria-hidden="false">
                        Specify Drug Allergies </label>
                    <div id="cid_294" class="form-input-wide" data-layout="full">
                        <textarea id="input_294" class="form-textarea validate[AlphaNumeric]" name="drug_allergy_note"
                            style="width:648px;height:130px" data-component="textarea" aria-labelledby="label_294"></textarea>
                    </div>
                    @if ($errors->has('drug_allergy_note'))
                        @foreach ($errors->get('drug_allergy_note') as $error)
                            <span style="color:red;">{{ $error }}</span><br>
                        @endforeach
                    @endif
                </li>
                <li class="form-line jf-required" data-type="control_radio" id="id_298"><label
                        class="form-label form-label-top" id="label_298" aria-hidden="false"> Does the patient
                        smoke?<span class="form-required">*</span> </label>
                    <div id="cid_298" class="form-input-wide jf-required" data-layout="full">
                        <div class="form-multiple-column" data-columncount="2" role="group"
                            aria-labelledby="label_298" data-component="radio"><span class="form-radio-item"><span
                                    class="dragger-item"></span><input type="radio" aria-describedby="label_298"
                                    class="form-radio validate[required]" id="input_298_0" name="patient_smoke"
                                    value="Yes" required="" /><label id="label_input_298_0"
                                    for="input_298_0">Yes</label></span><span class="form-radio-item"><span
                                    class="dragger-item"></span><input type="radio" aria-describedby="label_298"
                                    class="form-radio validate[required]" id="input_298_1" name="patient_smoke"
                                    value="No" required="" /><label id="label_input_298_1"
                                    for="input_298_1">No</label></span></div>
                    </div>
                    @if ($errors->has('patient_smoke'))
                        @foreach ($errors->get('patient_smoke') as $error)
                            <span style="color:red;">{{ $error }}</span><br>
                        @endforeach
                    @endif
                </li>
                <li class="form-line jf-required" data-type="control_radio" id="id_299"><label
                        class="form-label form-label-top" id="label_299" aria-hidden="false"> Does the patient
                        drink alcohol?<span class="form-required">*</span> </label>
                    <div id="cid_299" class="form-input-wide jf-required" data-layout="full">
                        <div class="form-multiple-column" data-columncount="2" role="group"
                            aria-labelledby="label_299" data-component="radio"><span class="form-radio-item"><span
                                    class="dragger-item"></span><input type="radio" aria-describedby="label_299"
                                    class="form-radio validate[required]" id="input_299_0" name="patient_alcohol"
                                    value="Yes" required="" /><label id="label_input_299_0"
                                    for="input_299_0">Yes</label></span><span class="form-radio-item"><span
                                    class="dragger-item"></span><input type="radio" aria-describedby="label_299"
                                    class="form-radio validate[required]" id="input_299_1" name="patient_alcohol"
                                    value="No" required="" /><label id="label_input_299_1"
                                    for="input_299_1">No</label></span></div>
                    </div>
                    @if ($errors->has('patient_alcohol'))
                        @foreach ($errors->get('patient_alcohol') as $error)
                            <span style="color:red;">{{ $error }}</span><br>
                        @endforeach
                    @endif
                </li>
                <li class="form-line form-line-column form-col-1 jf-required" data-type="control_checkbox"
                    id="id_321"><label class="form-label form-label-top" id="label_321" aria-hidden="false">
                        Family History<span class="form-required">*</span> </label>
                    <div id="cid_321" class="form-input-wide jf-required" data-layout="full">
                        <div class="form-single-column" role="group" aria-labelledby="label_321"
                            data-component="checkbox"><span class="form-checkbox-item" style="clear:left"><span
                                    class="dragger-item"></span><input type="checkbox"
                                    aria-describedby="label_321" class="form-checkbox validate[required]"
                                    id="input_321_0" name="family_history[]"
                                    value="Alzheimer&#x27;s Disease"  /><label
                                    id="label_input_321_0" for="input_321_0">Alzheimer's Disease</label></span><span
                                class="form-checkbox-item" style="clear:left"><span
                                    class="dragger-item"></span><input type="checkbox"
                                    aria-describedby="label_321" class="form-checkbox validate[required]"
                                    id="input_321_1" name="family_history[]" value="Asthma"
                                     /><label id="label_input_321_1"
                                    for="input_321_1">Asthma</label></span><span class="form-checkbox-item"
                                style="clear:left"><span class="dragger-item"></span><input type="checkbox"
                                    aria-describedby="label_321" class="form-checkbox validate[required]"
                                    id="input_321_2" name="family_history[]" value="Cancer"
                                     /><label id="label_input_321_2"
                                    for="input_321_2">Cancer</label></span><span class="form-checkbox-item"
                                style="clear:left"><span class="dragger-item"></span><input type="checkbox"
                                    aria-describedby="label_321" class="form-checkbox validate[required]"
                                    id="input_321_3" name="family_history[]" value="Diabetes"
                                     /><label id="label_input_321_3"
                                    for="input_321_3">Diabetes</label></span><span class="form-checkbox-item"
                                style="clear:left"><span class="dragger-item"></span><input type="checkbox"
                                    aria-describedby="label_321" class="form-checkbox validate[required]"
                                    id="input_321_4" name="family_history[]" value="Heart Disease"
                                     /><label id="label_input_321_4" for="input_321_4">Heart
                                    Disease</label></span><span class="form-checkbox-item" style="clear:left"><span
                                    class="dragger-item"></span><input type="checkbox"
                                    aria-describedby="label_321" class="form-checkbox validate[required]"
                                    id="input_321_5" name="family_history[]" value="Hypertension"
                                     /><label id="label_input_321_5"
                                    for="input_321_5">Hypertension</label></span><span class="form-checkbox-item"
                                style="clear:left"><span class="dragger-item"></span><input type="checkbox"
                                    aria-describedby="label_321" class="form-checkbox validate[required]"
                                    id="input_321_6" name="family_history[]" value="Obesity"
                                     /><label id="label_input_321_6"
                                    for="input_321_6">Obesity</label></span><span class="form-checkbox-item"
                                style="clear:left"><span class="dragger-item"></span><input type="checkbox"
                                    aria-describedby="label_321" class="form-checkbox validate[required]"
                                    id="input_321_7" name="family_history[]" value="Osteoporosis"
                                     /><label id="label_input_321_7"
                                    for="input_321_7">Osteoporosis</label></span><span class="form-checkbox-item"
                                style="clear:left"><span class="dragger-item"></span><input type="checkbox"
                                    aria-describedby="label_321" class="form-checkbox validate[required]"
                                    id="input_321_8" name="family_history[]" value="Stroke"
                                     /><label id="label_input_321_8"
                                    for="input_321_8">Stroke</label></span><span class="form-checkbox-item"
                                style="clear:left"><span class="dragger-item"></span><input type="checkbox"
                                    aria-describedby="label_321" class="form-checkbox validate[required]"
                                    id="input_321_9" name="family_history[]" value="Mental Disorders"
                                     /><label id="label_input_321_9" for="input_321_9">Mental
                                    Disorders</label></span><span class="form-checkbox-item"
                                style="clear:left"><span class="dragger-item"></span><input type="checkbox"
                                    aria-describedby="label_321" class="form-checkbox validate[required]"
                                    id="input_321_10" name="family_history[]" value="Substance Abuse"
                                     /><label id="label_input_321_10" for="input_321_10">Substance
                                    Abuse</label></span><span class="form-checkbox-item formCheckboxOther"
                                style="clear:left"><input type="checkbox"
                                    class="form-checkbox-other form-checkbox validate[required]"
                                    name="q321_familyHistory321[other]" id="other_321" value="other"
                                    tabindex="0" aria-label="Other" /><label id="label_other_321"
                                    style="text-indent:0" for="other_321">Other</label><span id="other_321_input"
                                    class="other-input-container" style="display:none"><input type="text"
                                        class="form-checkbox-other-input form-textbox"
                                        name="" data-otherhint="Other" size="15"
                                        id="input_321" data-placeholder="Please type another option here"
                                        placeholder="Please type another option here" /></span></span></div>
                    </div>
                    @if ($errors->has('family_history[]'))
                        @foreach ($errors->get('family_history[]') as $error)
                            <span style="color:red;">{{ $error }}</span><br>
                        @endforeach
                    @endif
                </li>
                <li class="form-line form-line-column form-col-1 form-line-column-clear"
                    data-type="control_textarea" id="id_330"><label class="form-label form-label-top"
                        id="label_330" for="input_330" aria-hidden="false"> Specify </label>
                    <div id="cid_330" class="form-input-wide" data-layout="full">
                        <textarea id="input_330" class="form-textarea validate[AlphaNumeric]" name="family_history[]"
                            style="width:648px;height:90px" data-component="textarea" aria-labelledby="label_330"></textarea>
                    </div>
                </li>
                <li id="cid_266" class="form-input-wide" data-type="control_head">
                    <div class="form-header-group  header-default">
                        <div class="header-text httal htvam">
                            <h2 id="header_266" class="form-header" data-component="header">Insurance Information
                            </h2>
                        </div>
                    </div>
                </li>
                <li class="form-line" data-type="control_radio" id="id_307"><label
                        class="form-label form-label-top" id="label_307" aria-hidden="false"> Is the patient the
                        Primary Card Holder? </label>
                    <div id="cid_307" class="form-input-wide" data-layout="full">
                        <div class="form-multiple-column" data-columncount="2" role="group"
                            aria-labelledby="label_307" data-component="radio"><span class="form-radio-item"><span
                                    class="dragger-item"></span><input type="radio" aria-describedby="label_307"
                                    class="form-radio" id="input_307_0" name="primary_holder"
                                    value="Yes" /><label id="label_input_307_0"
                                    for="input_307_0">Yes</label></span><span class="form-radio-item"><span
                                    class="dragger-item"></span><input type="radio" aria-describedby="label_307"
                                    class="form-radio" id="input_307_1" name="primary_holder"
                                    value="No" /><label id="label_input_307_1"
                                    for="input_307_1">No</label></span></div>
                    </div>
                    @if ($errors->has('primary_holder'))
                        @foreach ($errors->get('primary_holder') as $error)
                            <span style="color:red;">{{ $error }}</span><br>
                        @endforeach
                    @endif
                </li>
                <li class="form-line form-line-column form-col-1" data-type="control_textbox" id="id_267">
                    <label class="form-label form-label-top form-label-auto" id="label_267" for="input_267"
                        aria-hidden="false"> Insurance Company </label>
                    <div id="cid_267" class="form-input-wide" data-layout="half"> <input type="text"
                            id="input_267" name="insurance_company" data-type="input-textbox"
                            class="form-textbox validate[Alphabetic]" data-defaultvalue="" style="width:310px"
                            size="310" data-component="textbox" aria-labelledby="label_267"
                            value="" />
                            @if ($errors->has('insurance_company'))
                                @foreach ($errors->get('insurance_company') as $error)
                                    <span style="color:red;">{{ $error }}</span><br>
                                @endforeach
                            @endif
                        </div>
                </li>
                <li class="form-line form-line-column form-col-2" data-type="control_textbox" id="id_268">
                    <label class="form-label form-label-top form-label-auto" id="label_268" for="input_268"
                        aria-hidden="false"> Insurance ID </label>
                    <div id="cid_268" class="form-input-wide" data-layout="half"> <input type="text"
                            id="input_268" name="insurance_number" data-type="input-textbox"
                            class="form-textbox validate[AlphaNumeric]" data-defaultvalue="" style="width:310px"
                            size="310" data-component="textbox" aria-labelledby="label_268"
                            value="" />
                            @if ($errors->has('insurance_number'))
                                @foreach ($errors->get('insurance_number') as $error)
                                    <span style="color:red;">{{ $error }}</span><br>
                                @endforeach
                            @endif
                        </div>
                </li>
                <li class="form-line form-line-column form-col-3" data-type="control_datetime" id="id_314">
                    <label class="form-label form-label-top form-label-auto" id="label_314" for="lite_mode_314"
                        aria-hidden="false"> Effective Date </label>
                    <div id="cid_314" class="form-input-wide" data-layout="half">
                        <div data-wrapper-react="true">
                            <span class="form-sub-label-container" style="vertical-align:top">
                                <input type="text"
                                    class="form-textbox validate[required, limitDate, validateLiteDate]"
                                    id="lite_mode_314" name="effective_date" size="12" data-maxlength="12"
                                    maxLength="12" data-age="" value="" data-format="mmddyyyy"
                                    data-seperator="-"
                                    placeholder="MM-DD-YYYY" data-placeholder="MM-DD-YYYY" autoComplete="off"
                                    aria-labelledby="label_314" />
                                <img class="showAutoCalendar newDefaultTheme-dateIcon icon-liteMode"
                                    alt="Pick a Date" id="input_314_pick"
                                    src="https://cdn.jotfor.ms/images/calendar.png" data-component="datetime"
                                    aria-hidden="true" data-allow-time="No" data-version="v2" />
                                <label class="form-sub-label is-empty" for="lite_mode_314" id="sublabel_314_litemode"
                                    style="min-height:13px"></label>

                                @if ($errors->has('effective_date'))
                                    @foreach ($errors->get('effective_date') as $error)
                                        <span style="color:red;">{{ $error }}</span><br>
                                    @endforeach
                                @endif
                            </span>
                        </div>
                    </div>
                </li>
                <li class="form-line form-line-column form-col-4" data-type="control_datetime" id="id_315">
                    <label class="form-label form-label-top form-label-auto" id="label_315" for="lite_mode_315"
                        aria-hidden="false"> Expiration Date </label>
                    <div id="cid_315" class="form-input-wide" data-layout="half">
                        <div data-wrapper-react="true">
                            <span class="form-sub-label-container" style="vertical-align:top">
                                <input type="text"
                                    class="form-textbox validate[required, limitDate, validateLiteDate]"
                                    id="lite_mode_315" name="expiration_date" size="12" data-maxlength="12"
                                    maxLength="12" data-age="" value="" data-format="mmddyyyy"
                                    data-separator="-"
                                    placeholder="MM-DD-YYYY" data-placeholder="MM-DD-YYYY" autoComplete="off"
                                    aria-labelledby="label_315" />
                                <img class="showAutoCalendar newDefaultTheme-dateIcon icon-liteMode"
                                    alt="Pick a Date" id="input_315_pick"
                                    src="https://cdn.jotfor.ms/images/calendar.png" data-component="datetime"
                                    aria-hidden="true" data-allow-time="No" data-version="v2" />
                                <label class="form-sub-label is-empty" for="lite_mode_315" id="sublabel_315_litemode"
                                    style="min-height:13px"></label>

                                @if ($errors->has('expiration_date'))
                                    @foreach ($errors->get('expiration_date') as $error)
                                        <span style="color:red;">{{ $error }}</span><br>
                                    @endforeach
                                @endif
                            </span>
                        </div>
                    </div>
                </li>
                <li class="form-line" data-type="control_radio" id="id_309">
                    <label class="form-label form-label-top form-label-auto" id="label_309" aria-hidden="false">
                        Insurance Plan Type
                    </label>
                    <div id="cid_309" class="form-input-wide" data-layout="full">
                        <div class="form-single-column" role="group" aria-labelledby="label_309" data-component="radio">
                            <span class="form-radio-item" style="clear:left">
                                <input type="radio" aria-describedby="label_309" class="form-radio" id="input_309_0" name="plan_type" value="HMO (Health Maintenance Organization)" />
                                <label id="label_input_309_0" for="input_309_0">HMO (Health Maintenance Organization)</label>
                            </span>
                            <span class="form-radio-item" style="clear:left">
                                <input type="radio" aria-describedby="label_309" class="form-radio" id="input_309_1" name="plan_type" value="PPO (Preferred Provider Organization)" />
                                <label id="label_input_309_1" for="input_309_1">PPO (Preferred Provider Organization)</label>
                            </span>
                            <span class="form-radio-item" style="clear:left">
                                <input type="radio" aria-describedby="label_309" class="form-radio" id="input_309_2" name="plan_type" value="EPO (Exclusive Provider Organization)" />
                                <label id="label_input_309_2" for="input_309_2">EPO (Exclusive Provider Organization)</label>
                            </span>
                            <span class="form-radio-item" style="clear:left">
                                <input type="radio" aria-describedby="label_309" class="form-radio" id="input_309_3" name="plan_type" value="HDHP (High Deductible Health Plan)" />
                                <label id="label_input_309_3" for="input_309_3">HDHP (High Deductible Health Plan)</label>
                            </span>
                            <span class="form-radio-item formRadioOther" style="clear:left">
                                <input type="radio" class="form-radio-other form-radio" name="" id="other_309" value="other" tabindex="0" aria-label="Other" />
                                <label id="label_other_309" style="text-indent:0" for="other_309">Other</label>
                                <span id="other_309_input" class="other-input-container" style="display:none">
                                    <input type="text" class="form-radio-other-input form-textbox" name="" size="15" id="input_309_other" placeholder="Please type another option here" />
                                </span>
                            </span>
                        </div>
                    </div>
                    @if ($errors->has('plan_type'))
                        @foreach ($errors->get('plan_type') as $error)
                            <span style="color:red;">{{ $error }}</span><br>
                        @endforeach
                    @endif
                </li>
                <li class="form-line form-line-column form-col-1 form-line-column-clear"
                    data-type="control_textarea" id="id_313"><label class="form-label form-label-top"
                        id="label_313" for="input_313" aria-hidden="false"> Specify </label>
                    <div id="cid_313" class="form-input-wide" data-layout="full">
                        <textarea id="input_313" class="form-textarea validate[AlphaNumeric]" name=""
                            style="width:648px;height:100px" data-component="textarea" aria-labelledby="label_313"></textarea>
                    </div>
                    {{-- @if ($errors->has('plan_type'))
                        @foreach ($errors->get('plan_type') as $error)
                            <span style="color:red;">{{ $error }}</span><br>
                        @endforeach
                    @endif --}}
                </li>
                <li class="form-line form-line-column form-col-2" data-type="control_fullname" id="id_269"
                    data-compound-hint="First Name,Last Name"><label
                        class="form-label form-label-top form-label-auto" id="label_269" for="first_269"
                        aria-hidden="false"> Card Holder's Name </label>
                    <div id="cid_269" class="form-input-wide" data-layout="full">
                        <div data-wrapper-react="true"><span class="form-sub-label-container"
                                style="vertical-align:top" data-input-type="first"><input type="text"
                                    id="first_269" name="holder_first_name" class="form-textbox"
                                    data-defaultvalue="" autoComplete="section-input_269 given-name"
                                    size="10" placeholder="First Name" data-component="first"
                                    aria-labelledby="label_269" value="" />
                                    @if ($errors->has('holder_first_name'))
                                        @foreach ($errors->get('holder_first_name') as $error)
                                            <span style="color:red;">{{ $error }}</span><br>
                                        @endforeach
                                    @endif
                                </span><span
                                class="form-sub-label-container" style="vertical-align:top"
                                data-input-type="last"><input type="text" id="last_269"
                                    name="holder_last_name" class="form-textbox" data-defaultvalue=""
                                    autoComplete="section-input_269 family-name" size="15"
                                    placeholder="Last Name" data-component="last" aria-labelledby="label_269"
                                    value="" />
                                    @if ($errors->has('holder_last_name'))
                                        @foreach ($errors->get('holder_last_name') as $error)
                                            <span style="color:red;">{{ $error }}</span><br>
                                        @endforeach
                                    @endif
                                </span></div>
                    </div>
                </li>
                <li class="form-line form-line-column form-col-3" data-type="control_datetime" id="id_270">
                    <label class="form-label form-label-top form-label-auto" id="label_270" for="lite_mode_270"
                        aria-hidden="false"> Date of Birth </label>
                    <div id="cid_270" class="form-input-wide" data-layout="half">
                        <div data-wrapper-react="true">
                            <span class="form-sub-label-container" style="vertical-align:top">
                                <input type="text"
                                    class="form-textbox validate[required, limitDate, validateLiteDate]"
                                    id="lite_mode_270" name="holder_dob" size="12" data-maxlength="12"
                                    maxLength="12" value="" data-format="mmddyyyy" data-separator="/"
                                    placeholder="MM/DD/YYYY" data-placeholder="MM/DD/YYYY" autoComplete="off"
                                    aria-labelledby="label_270" />
                                <img class="showAutoCalendar newDefaultTheme-dateIcon icon-liteMode"
                                    alt="Pick a Date" id="input_270_pick"
                                    src="https://cdn.jotfor.ms/images/calendar.png" data-component="datetime"
                                    aria-hidden="true" data-allow-time="No" data-version="v2" />
                                <label class="form-sub-label is-empty" for="lite_mode_270" id="sublabel_270_litemode"
                                    style="min-height:13px"></label>
                                    @if ($errors->has('holder_dob'))
                                        @foreach ($errors->get('holder_dob') as $error)
                                            <span style="color:red;">{{ $error }}</span><br>
                                        @endforeach
                                    @endif
                            </span>
                        </div>
                    </div>
                </li>
                <li class="form-line form-line-column form-col-4" data-type="control_phone" id="id_319"><label
                        class="form-label form-label-top form-label-auto" id="label_319" for="input_319_full">
                        Card Holder's Contact </label>
                    <div id="cid_319" class="form-input-wide" data-layout="half"> <span
                            class="form-sub-label-container" style="vertical-align:top"><input type="tel"
                                id="input_319_full" name="holder_phone" data-type="mask-number"
                                class="mask-phone-number form-textbox validate[Fill Mask]" data-defaultvalue=""
                                autoComplete="section-input_319 tel" style="width:310px" data-masked="true"
                                placeholder="0000-000-0000" data-component="phone" aria-labelledby="label_319"
                                value="" />
                                @if ($errors->has('holder_phone'))
                                    @foreach ($errors->get('holder_phone') as $error)
                                        <span style="color:red;">{{ $error }}</span><br>
                                    @endforeach
                                @endif
                            </span> </div>
                </li>
                <li class="form-line form-line-column form-col-5" data-type="control_email" id="id_320"><label
                        class="form-label form-label-top" id="label_320" for="input_320" aria-hidden="false">
                        Card Holder's Email </label>
                    <div id="cid_320" class="form-input-wide" data-layout="half"> <input type="email"
                            id="input_320" name="holder_email" class="form-textbox validate[Email]"
                            data-defaultvalue="" autoComplete="section-input_320 email" style="width:310px"
                            size="310" placeholder="e.g. example@example.com" data-component="email"
                            aria-labelledby="label_320" value="" />
                            @if ($errors->has('holder_email'))
                                @foreach ($errors->get('holder_email') as $error)
                                    <span style="color:red;">{{ $error }}</span><br>
                                @endforeach
                            @endif
                        </div>
                </li>
                <li class="form-line" data-type="control_address" id="id_316"
                    data-compound-hint="Street Address,Street Address 2,City,State / Province,,ZIP / Postal Code,,">
                    <label class="form-label form-label-top form-label-auto" id="label_316"
                        for="input_316_addr_line1" aria-hidden="false"> Card Holder's Address </label>
                    <div id="cid_316" class="form-input-wide" data-layout="full">
                        <div summary="" class="form-address-table jsTest-addressField">
                            <div class="form-address-line-wrapper jsTest-address-line-wrapperField"><span
                                    class="form-address-line form-address-street-line jsTest-address-lineField"><span
                                        class="form-sub-label-container" style="vertical-align:top"><input
                                            type="text" id="input_316_addr_line1"
                                            name="holder_street_address"
                                            class="form-textbox form-address-line" data-defaultvalue=""
                                            autoComplete="section-input_316 address-line1"
                                            placeholder="Street Address" data-component="address_line_1"
                                            aria-labelledby="label_316" value="" />
                                            @if ($errors->has('holder_street_address'))
                                                @foreach ($errors->get('holder_street_address') as $error)
                                                    <span style="color:red;">{{ $error }}</span><br>
                                                @endforeach
                                            @endif
                                        </span></span></div>
                            <div class="form-address-line-wrapper jsTest-address-line-wrapperField"><span
                                    class="form-address-line form-address-street-line jsTest-address-lineField"><span
                                        class="form-sub-label-container" style="vertical-align:top"><input
                                            type="text" id="input_316_addr_line2"
                                            name="holder_street_address_2"
                                            class="form-textbox form-address-line" data-defaultvalue=""
                                            autoComplete="section-input_316 address-line2"
                                            placeholder="Street Address 2" data-component="address_line_2"
                                            aria-labelledby="label_316" value="" />
                                            @if ($errors->has('holder_street_address_2'))
                                                @foreach ($errors->get('holder_street_address_2') as $error)
                                                    <span style="color:red;">{{ $error }}</span><br>
                                                @endforeach
                                            @endif
                                        </span></span></div>
                            <div class="form-address-line-wrapper jsTest-address-line-wrapperField"><span
                                    class="form-address-line form-address-city-line jsTest-address-lineField "><span
                                        class="form-sub-label-container" style="vertical-align:top"><input
                                            type="text" id="input_316_city" name="holder_city"
                                            class="form-textbox form-address-city" data-defaultvalue=""
                                            autoComplete="section-input_316 address-level2" placeholder="City"
                                            data-component="city" aria-labelledby="label_316"
                                            value="" />
                                            @if ($errors->has('holder_city'))
                                                @foreach ($errors->get('holder_city') as $error)
                                                    <span style="color:red;">{{ $error }}</span><br>
                                                @endforeach
                                            @endif
                                        </span></span><span
                                    class="form-address-line form-address-state-line jsTest-address-lineField "><span
                                        class="form-sub-label-container" style="vertical-align:top"><input
                                            type="text" id="input_316_state" name="holder_state"
                                            class="form-textbox form-address-state" data-defaultvalue=""
                                            autoComplete="section-input_316 address-level1"
                                            placeholder="State / Province" data-component="state"
                                            aria-labelledby="label_316" value="" />
                                            @if ($errors->has('holder_state'))
                                                @foreach ($errors->get('holder_state') as $error)
                                                    <span style="color:red;">{{ $error }}</span><br>
                                                @endforeach
                                            @endif
                                        </span></span></div>
                            <div class="form-address-line-wrapper jsTest-address-line-wrapperField"><span
                                    class="form-address-line form-address-zip-line jsTest-address-lineField "><span
                                        class="form-sub-label-container" style="vertical-align:top"><input
                                            type="text" id="input_316_postal" name="holder_zip"
                                            class="form-textbox form-address-postal" data-defaultvalue=""
                                            autoComplete="section-input_316 postal-code"
                                            placeholder="ZIP / Postal Code" data-component="zip"
                                            aria-labelledby="label_316" value="" />
                                            @if ($errors->has('holder_zip'))
                                                @foreach ($errors->get('holder_zip') as $error)
                                                    <span style="color:red;">{{ $error }}</span><br>
                                                @endforeach
                                            @endif
                                        </span></span></div>
                        </div>
                    </div>
                </li>
                <li class="form-line" data-type="control_button" id="id_2">
                    <div id="cid_2" class="form-input-wide" data-layout="full">
                        <div data-align="auto"
                            class="form-buttons-wrapper form-buttons-auto   jsTest-button-wrapperField"><button
                                id="input_2" type="submit"
                                class="form-submit-button form-submit-button-navy-700 submit-button jf-form-buttons jsTest-submitField"
                                data-component="button" data-content="">Register</button></div>
                    </div>
                </li>
                <li style="clear:both"></li>
                <li style="display:none">Should be Empty: <input type="text" name="" value=""
                        type="hidden" /></li>
            </ul>
        </div>
    </form>

</body>

</html>

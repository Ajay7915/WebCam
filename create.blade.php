<div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div>
                <div class="page-heading">
                    <h1 class="page-title">अपाङ्गता भएको व्यक्तिको विवरण</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html"><i class="la la-home font-20"></i></a>
                        </li>
                    </ol>
                </div>
                <div class="page-content fade-in-up">
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">अपाङ्गता भएको व्यक्तिको विवरण</h4>
                                    <hr>
                                    <form enctype="multipart/form-data">
                                        @csrf
                                        <!-- /************************ # Photo **************************************************/ -->
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h4 class="card-title">क. फोटो</h4>

                                                        <input type="file" class="dropify" data-height="300" name="imgKhaProfile" />
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <div id="my_camera"></div>
                                                                <input type=button value="Capture" class="btn btn-danger mb-2" id="clickme" onClick="take_snapshot()">
                                                                <input type="hidden" name="image" class="image-tag">
                                                                <input type="button" value="Camera" onclick="Camera()" class="btn btn-primary mb-2">
                                                            </div>
                                                            <div class="col-6">
                                                                <div id="results" class="mt-4"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h4 class="card-title">ख. छाप</h4>
                                                        <div class="mt-3">
                                                            <div>
                                                                <label class="ui-radio ui-radio-inline">
                                                                    <input type="radio" name="test">
                                                                    <span class="input-span"></span>हातको औंला
                                                                </label>
                                                                <label class="ui-radio ui-radio-inline">
                                                                    <input type="radio" name="test">
                                                                    <span class="input-span"></span>खुट्टाको औंला
                                                                </label>
                                                                <label class="ui-radio ui-radio-inline">
                                                                    <input type="radio" name="test">
                                                                    <span class="input-span"></span>दुवै नभएको
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="row">
                                                            <div class="col-4">
                                                                <div class="card-body">
                                                                    <button class="btn btn-success">Right</button>
                                                                    <span>sdgdgd</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="card-body">
                                                                    <button class="btn btn-success">Left</button>
                                                                    <span>dgdfgd</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end row-->

                                        <!-- /********************************** Start १. नाम *********************************************/ -->
                                        <h4 class="card-title mt-3"><b>१. नाम: <span id="star">*</span></b></h4>
                                        <div class="form-row">
                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustom01">पुरा नाम नेपालीमा</label>
                                                <input type="text" class="form-control" id="validationCustom01" name="txt1Nam" placeholder="पुरा नाम ......" required>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustom02">Full name in English</label>
                                                <input type="text" class="form-control" id="validationCustom02" name="txt1Name" placeholder="Full name" required>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustom02">लिङ्ग</label>
                                                <select class="form-control" name="selectGender" id="select1Gender">
                                                    <option value disabled selected>छन्नुहोस्...... </option>
                                                    <option value="male">पुरुष</option>
                                                    <option value="female">महिला</option>
                                                    <option value="other">अन्य </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustom02">जातीयता</label>
                                                <select class="form-control" name="select1Cast">
                                                    <option value selected disabled>छन्नुहोस्...... </option>
                                                    <option value="tharu">थारु</option>
                                                    <option value="madeshi">मदेसी</option>
                                                    <option value="magar">मगर</option>
                                                    <option value="baahun">बाहुन</option>
                                                    <option value="chhetri">छेत्री</option>
                                                    <option value="thakuri">ठकुरी</option>
                                                    <option value="janajaati">जनजाती</option>
                                                    <option value="aadiwaasi/janajaati">आदिवासी</option>
                                                    <option value="daalit">Daalit</option>
                                                    <option value="mushlim">Mushlim</option>
                                                    <option value="other">अन्य </option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustom01">जन्म मिति (बि.स.)</label>
                                                <input type="text" class="form-control" id="validationCustom01" name="txt1DobBS" placeholder="YYYY-MM-DD" required>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustom02">Date of birth (A.D.)</label>
                                                <input type="text" class="form-control" id="validationCustom02" name="txt1DobAD" placeholder="YYYY-MM-DD" required>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- /********************************** End १. नाम *********************************************/ -->
                                        <!-- /********************************** Start २. स्थायी ठेगाना *********************************************/ -->
                                        <h4 class="card-title"><b>२. स्थायी ठेगाना <span id="star">*</span></b></h4>
                                        <div class="form-row">
                                            <div class="col-md-3 mb-3">
                                                <label for="validationCustom02">प्रदेश</label>
                                                <select class="form-control" id="state" name="state">
                                                    <option value disabled selected>छन्नुहोस्......</option>
                                                    @foreach($data as $row)
                                                    <option value="{{$row->sid}}">{{$row->pardeshName}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="validationCustom02">जिल्ला</label>
                                                <select class="form-control" name="district" id="district">
                                                    <option value="" disabled selected>छन्नुहोस्......</option>
                                                </select>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="validationCustom02">पालिका</label>
                                                <select class="form-control" name="palika" id="palika">
                                                    <option value="" disabled selected>छन्नुहोस्......</option>
                                                </select>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="validationCustom02">वार्ड</label>
                                                <select class="form-control" name="select2WardNo">
                                                    <option value="" disabled>छन्नुहोस्...... </option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-3 mb-3">
                                                <label for="validationCustom01">टोल</label>
                                                <input type="text" class="form-control" id="validationCustom01" name="txt2Tool" placeholder="टोल" required>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="validationCustom02">Street</label>
                                                <input type="text" class="form-control" id="validationCustom02" name="txt2Street" placeholder="Street" required>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="validationCustom02">गाउँ</label>
                                                <input type="text" class="form-control" id="validationCustom02" name="txt2Gaun" placeholder="गाउँ" required>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="validationCustom02">Village</label>
                                                <input type="text" class="form-control" id="validationCustom02" name="txt2Village" placeholder="Village" required>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <label for="validationCustom02">फोन न:/Phone Number</label>
                                                <input type="text" class="form-control" id="validationCustom02" name="txt2Phone" placeholder="Phone Number" required>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- /********************************** End २. स्थायी ठेगाना *********************************************/ -->
                                        <!-- /******************************************** Start ३. अस्थायी ठेगाना **********************************************/ -->

                                        <h4 class="card-title"><b>३. अस्थायी ठेगाना </b></h4>

                                        <div class="mb-1"><span>स्थायी ठेगाना र अस्थायी ठेगाना उही नभएमा / If not same as permanent address.</span></div>
                                        <div class="custom-control custom-checkbox mb-2">
                                            <label class="ui-checkbox ui-checkbox-primary">
                                               <!-- / <input type="checkbox" name="check3Permanent" onclick="PermanentAddress()"> -->
                                               <!-- <span>स्थायी ठेगाना र अस्थायी ठेगाना उही नभएमा / If not same as permanent address.</span -->
                                            </label>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-3 mb-3">
                                                <label for="validationCustom02">प्रदेश</label>
                                                <select class="form-control" id="state2" name="state2">
                                                    <option value disabled selected>छन्नुहोस्......</option>
                                                    @foreach($data as $row)
                                                    <option value="{{$row->sid}}">{{$row->pardeshName}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="validationCustom02">जिल्ला</label>
                                                <select class="form-control" name="district2" id="district2">
                                                    <option value="" disabled selected>छन्नुहोस्......</option>
                                                </select>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="validationCustom02">पालिका</label>
                                                <select class="form-control" name="palika2" id="palika2">
                                                    <option value="" disabled selected>छन्नुहोस्......</option>
                                                </select>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="validationCustom02">वार्ड</label>
                                                <select class="form-control" name="txt3WardaNo">
                                                    <option value="null">छन्नुहोस्...... </option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-3 mb-3">
                                                <label for="validationCustom01">टोल</label>
                                                <input type="text" class="form-control" id="validationCustom01" name="txt3Tool" placeholder="टोल" required>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="validationCustom02">Street</label>
                                                <input type="text" class="form-control" id="validationCustom02" name="txt3Street" placeholder="Street" required>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="validationCustom02">गाउँ</label>
                                                <input type="text" class="form-control" id="validationCustom02" name="txt3Gaun" placeholder="गाउँ" required>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="validationCustom02">Village</label>
                                                <input type="text" class="form-control" id="validationCustom02" name="txt3Village" placeholder="Village" required>
                                            </div>
                                        </div>
                                        <hr>

                                        <!-- /** ********************************End ३. अस्थायी ठेगाना ***************************************************/ -->
                                        <!-- /********************************** Start ४. परिवारको सदस्य वा संरक्षकको *************************************/ -->

                                        <h4 class="card-title"><b>४. परिवारको सदस्य वा संरक्षकको <span id="star">*</span></b></h4>
                                        <div class="form-row">
                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustom01">संरक्षकको नाम</label>
                                                <input type="text" class="form-control" id="validationCustom01" name="txt4NamCustodian" placeholder="संरक्षकको पुरा नाम..." required>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustom02">Gardian name</label>
                                                <input type="text" class="form-control" id="validationCustom02" name="txt4NameGardian" placeholder="Gardian name" required>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustom02">नाता</label>
                                                <select class="form-control" name="select4Nata">
                                                    <option value="">छन्नुहोस्...... </option>
                                                    <option value="mother">आमा</option>
                                                    <option value="sister">दिदी</option>
                                                    <option value="father">बुवा</option>
                                                    <option value="grandfather">हजुरबुबा</option>
                                                    <option value="grandmother">हजुरआमा</option>
                                                    <option value="uncle">काका</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-12 mb-3">
                                                <label for="validationCustom02">टेलिफोन वा मोबाईल नं.</label>
                                                <input type="text" class="form-control" id="validationCustom02" name="txt4Phone" placeholder="Phone Number" required>
                                            </div>
                                        </div>
                                        <hr>

                                        <!-- /********************************** End ४. परिवारको सदस्य वा संरक्षकको ********************************************/ -->
                                        <!-- /********************************** Start ५. असक्तताको गम्भीरताका आधारमा अपाङ्गताको वर्गीकरण ******************************************************/ -->

                                        <h4 class="card-title"><b>५. असक्तताको गम्भीरताका आधारमा अपाङ्गताको वर्गीकरण</b></h4>
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="validationCustom02">अपाङ्गताको प्रकार</label>
                                                <select class="form-control" name="select5Aapanga">
                                                    <option value="">छन्नुहोस्...... </option>
                                                    <option value="fullDisable">पूर्ण अशक्त अपाङ्गता</option>
                                                    <option value="halfDisable">आधा अशक्त अपाङ्गता</option>
                                                    <option value="midDisable">बमध्यम अपाङ्गता </option>
                                                </select>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label for="validationCustom02">रक्त समूह</label>
                                                <select class="form-control" name="select5Blood">
                                                    <option value="">छन्नुहोस्...... </option>
                                                    <option value="O+">O+</option>
                                                    <option value="B+">B+</option>
                                                    <option value="B-">B-</option>
                                                    <option value="A+">A+</option>
                                                    <option value="O-">O-</option>
                                                </select>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- /********************************** End ५. असक्तताको गम्भीरताका आधारमा अपाङ्गताको वर्गीकरण ******************************************************/ -->
                                        <!-- /********************************** Start ६. शारीरिक अङ्ग वा प्रणालीमा भएको समस्या तथा कठिनाइको आधारमा ******************************************************/ -->
                                        <h4 class="card-title"><b>६. शारीरिक अङ्ग वा प्रणालीमा भएको समस्या तथा कठिनाइको आधारमा</b></h4>
                                        <div class="form-row">
                                            <div class="col-md-12 mb-3">
                                                <label for="validationCustom02">समस्या तथा कठिनाइको आधारमा</label>
                                                <select class="form-control" name="select6SamasiyaKoAadharma">
                                                    <option value="">छन्नुहोस्...... </option>
                                                    <option value="">Haat Kutta Vachiyeko</option>
                                                    <option value="">Andho Vayeko</option>
                                                    <option value="">Bolna nasakne</option>
                                                    <option value="">Sunna nasakne</option>
                                                    <option value="">chalna nasakene</option>
                                                </select>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <label for="validationCustom02">शरीरको अङ्ग, संरचना, प्रणालीमा आएको क्षतिको विवरणरण</label>
                                                <input type="text" class="form-control" id="validationCustom02" name="txt6AapangaPart" placeholder="Jastai Haat kutta vachiyeko" required>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <label for="validationCustom02">क्षति भएपछि क्रियाकलापमा आएको अबरोध वा सिमितताको बिबरण</label>
                                                <input type="text" class="form-control" id="validationCustom02" name="txt6AapangaPartDiscription" placeholder="क्षति भएपछि क्रियाकलापमा आएको अबरोध बिबरण " required>
                                            </div>
                                        </div>
                                        <hr>

                                        <!-- /********************************** End ६. शारीरिक अङ्ग वा प्रणालीमा भएको समस्या तथा कठिनाइको आधारमा ******************************************************/ -->
                                        <!-- /********************************** Start ७. अपाङ्गताको कारण ******************************************************/ -->
                                        <h4 class="card-title"><b>७. अपाङ्गताको कारण</b></h4>
                                        <div class="form-row">
                                            <div class="col-md-12 mb-3">
                                                <label for="validationCustom02">अपाङ्गताको कारण</label>
                                                <select class="form-control" name="select7AapangaKoKaran">
                                                    <option value="">छन्नुहोस्...... </option>
                                                    <option value="formBirth">जन्म देखि</option>
                                                    <option value="accident">दुर्घटना</option>
                                                    <option value="disease">रोगको कारण</option>
                                                </select>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- /********************************** End ७. अपाङ्गताको कारण ******************************************************/ -->
                                        <!-- /********************************** Start ८. अपाङ्गता परिचय पत्र पाएको ******************************************************/ -->
                                        <h4 class="card-title"><b>८. अपाङ्गता परिचय पत्र पाएको</b></h4>
                                        <div class="form-row">
                                            <label class="card-text"> अपाङ्गता परिचय पत्र पाएको</label>
                                            <div class="col-md-12 mb-3">
                                                <div class="custom-control custom-radio">
                                                    <div>
                                                        <label class="ui-radio ui-radio-inline">
                                                            <input type="radio" name="rad8ParichyaPatra">
                                                            <span class="input-span"></span>पाएको
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <label class="ui-radio ui-radio-inline">
                                                            <input type="radio" name="rad8ParichyaPatra">
                                                            <span class="input-span"></span>नपाएको
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="form-row mt-4">
                                                    <div class="col-md-3 mb-3">
                                                        <label for="validationCustom02">कहाँ बाट</label>
                                                        <select class="form-control" name="select8kahabata">
                                                            <option value="null">छन्नुहोस्...... </option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-3 mb-3">
                                                        <label for="validationCustom02">कार्ड नं</label>
                                                        <input type="text" class="form-control" id="validationCustom02" name="txt8CardNumber" placeholder="कार्ड नं" required>
                                                    </div>
                                                    <div class="col-md-3 mb-3">
                                                        <label for="validationCustom02">परिचय पत्र पाएको मिति (बि.स.)</label>
                                                        <input type="text" class="form-control" id="validationCustom02" name="txt8CartDateBS" placeholder="" required>
                                                    </div>
                                                    <div class="col-md-3 mb-3">
                                                        <label for="validationCustom02">Card received date (A.D.)</label>
                                                        <input type="text" class="form-control" id="validationCustom02" name="txt8CartDateAD" placeholder="" required>
                                                    </div>
                                                </div>
                                                <div class="form-row mt-4">
                                                    <div class="col-md-3 mb-3">
                                                        <label for="validationCustom02">बुवाको नाम</label>
                                                        <input type="text" class="form-control" id="validationCustom02" name="txt8FatherNam" placeholder="कार्ड नं" required>
                                                    </div>
                                                    <div class="col-md-3 mb-3">
                                                        <label for="validationCustom02">Father's name</label>
                                                        <input type="text" class="form-control" id="validationCustom02" name="txt8FatherName" placeholder="कार्ड नं" required>
                                                    </div>
                                                    <div class="col-md-3 mb-3">
                                                        <label for="validationCustom02">हजुरबुवाको नाम</label>
                                                        <input type="text" class="form-control" id="validationCustom02" name="txt8GrandFatherNam" placeholder="" required>
                                                    </div>
                                                    <div class="col-md-3 mb-3">
                                                        <label for="validationCustom02">Grand-father's name</label>
                                                        <input type="text" class="form-control" id="validationCustom02" name="txt8GrandFatherName" placeholder="" required>
                                                    </div>
                                                </div>
                                                <div class="form-row mt-4">
                                                    <div class="col-md-3 mb-3">
                                                        <label for="validationCustom02">आमाको नाम</label>
                                                        <input type="text" class="form-control" id="validationCustom02" name="txt8MotherNam" placeholder="कार्ड नं" required>
                                                    </div>
                                                    <div class="col-md-3 mb-3">
                                                        <label for="validationCustom02">Mother's name</label>
                                                        <input type="text" class="form-control" id="validationCustom02" name="txt8MotherName" placeholder="कार्ड नं" required>
                                                    </div>
                                                    <div class="col-md-3 mt-5">
                                                        <label class="ui-checkbox ui-checkbox-primary">
                                                            <input type="checkbox" name="checkbox8SanghrakshaFather">
                                                            <span class="input-span"></span>संरक्षक र बुवा एउटै हुन्
                                                        </label>
                                                    </div>
                                                    <div class="col-md-3 mt-5">
                                                        <label class="ui-checkbox ui-checkbox-primary">
                                                            <input type="checkbox" name="checkbox8SanghrakshaMother">
                                                            <span class="input-span"></span>संरक्षक र बुवा एउटै हुन्
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>

                                        <!-- /********************************** End ८. अपाङ्गता परिचय पत्र पाएको ******************************************************/ -->
                                        <!-- /********************************** End ९. परिचय खुलाउने विवरण ******************************************************/ -->

                                        <h4 class="card-title"><b>९. परिचय खुलाउने विवरण</b></h4>
                                        <div class="form-row">
                                            <div class="col-md-3 mb-3">
                                                <label for="validationCustom01">जन्म दर्ता नं.</label>
                                                <input type="text" class="form-control" id="validationCustom01" name="txt9BornNo" placeholder="" required>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="validationCustom02">जन्म दर्ता पाएको स्थान</label>
                                                <input type="text" class="form-control" id="validationCustom02" name="txt9BornIssuedPlace" placeholder="" required>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="validationCustom02">जन्म दर्ता पाएको मिति (बि.स.)</label>
                                                <input type="text" class="form-control" id="validationCustom02" name="txt9BornIssuedDate" placeholder="" required>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="validationCustom02">Born registration date (A.D.)</label>
                                                <input type="text" class="form-control" id="validationCustom02" name="txt9BornRegistrationDate" placeholder="" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-3 mb-3">
                                                <label for="validationCustom01">नागरिकता नं.</label>
                                                <input type="text" class="form-control" id="validationCustom01" name="txt9CitizenshipNo" placeholder="" required>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="validationCustom02">नागरिकता पाएको स्थान</label>
                                                <input type="text" class="form-control" id="validationCustom02" name="txt9IssuedPlace" placeholder="" required>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="validationCustom02">नागरिकता पाएको मिति (बि.स.)</label>
                                                <input type="text" class="form-control" id="validationCustom02" name="txt9IssuedDate" placeholder="" required>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="validationCustom02">Citizenship Reg. Date (A.D.)</label>
                                                <input type="text" class="form-control" id="validationCustom02" name="txt9RegistrationDate" placeholder="" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-3 mb-3">
                                                <label class="card-text">नागरिकताको फोटोकपी</label>
                                                <input type="file" class="dropify" name="frontPhotoCitizenship" />
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label class="card-text">जन्मदर्ताको फोटोकपी</label>
                                                <input type="file" class="dropify" name="backPhotoCitizenship" />
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- /********************************** End ९. परिचय खुलाउने विवरण ******************************************************/ -->
                                        <!-- /********************************** Start १०.सहयोग सामाग्री प्रयोग गर्नुपर्ने आबश्यकता ******************************************************/ -->
                                        <h4 class="card-title"><b>१०.सहयोग सामाग्री प्रयोग गर्नुपर्ने आबश्यकता</b></h4>
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <div class="mt-3">
                                                    <div class="custom-control custom-radio">
                                                        <div>
                                                            <label class="ui-radio ui-radio-inline">
                                                                <input type="radio" name="rad10DainikKaam">
                                                                <span class="input-span"></span>भएको
                                                            </label>
                                                        </div>
                                                        <div>
                                                            <label class="ui-radio ui-radio-inline">
                                                                <input type="radio" name="rad10DainikKaam">
                                                                <span class="input-span"></span>नभएको
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- /********************************** End १०.सहयोग सामाग्री प्रयोग गर्नुपर्ने आबश्यकता ******************************************************/ -->
                                        <!-- /********************************** Start ११. पछिल्लो सैक्षिक योग्यता ******************************************************/ -->
                                        <h4 class="card-title"><b>११. पछिल्लो सैक्षिक योग्यता</b></h4>
                                        <div class="form-row">
                                            <div class="col-md-12 mb-3">
                                                <select class="form-control" name="select11SaikshikYogyata">
                                                    <option value="">छन्नुहोस्...... </option>
                                                    <option value="formBirth">Samanya</option>
                                                    <option value="accident">Ma Bi</option>
                                                    <option value="disease">Agriculture</option>
                                                    <option value="disease">Other</option>
                                                </select>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- /********************************** End ११. पछिल्लो सैक्षिक योग्यता ******************************************************/ -->
                                        <!-- /********************************** Start १२. ******************************************************/ -->
                                        <h4 class="card-title"><b>१२. दैनिक क्रियाकलाप</b></h4>
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <div class="mt-3">
                                                    <label for="">दैनिक क्रियाकलाप गर्न </label>
                                                    <div class="custom-control custom-radio">
                                                        <div>
                                                            <label class="ui-radio ui-radio-inline">
                                                                <input type="radio" name="rad12DainikKaam">
                                                                <span class="input-span"></span>सक्ने
                                                            </label>
                                                        </div>
                                                        <div>
                                                            <label class="ui-radio ui-radio-inline">
                                                                <input type="radio" name="rad12DainikKaam">
                                                                <span class="input-span"></span>नसक्ने
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="mt-3">
                                                    <label for="">साहायक सामाग्री प्रयोग गर्ने</label>
                                                    <div class="custom-control custom-radio">
                                                        <div>
                                                            <label class="ui-radio ui-radio-inline">
                                                                <input type="radio" name="rad12Sahayak">
                                                                <span class="input-span"></span>गरेको
                                                            </label>
                                                        </div>
                                                        <div>
                                                            <label class="ui-radio ui-radio-inline">
                                                                <input type="radio" name="rad12Sahayak">
                                                                <span class="input-span"></span>नगरेको
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- /********************************** End १२.******************************************************/ -->
                                        <!-- /********************************** Start १३. सहायक सामग्री प्रयोग गर्ने गरेको भए सामाग्रीको नाम.******************************************************/ -->
                                        <h4 class="card-title"><b>१३. सहायक सामग्री प्रयोग गर्ने गरेको भए सामाग्रीको नाम.</b></h4>
                                        <div class="form-row">
                                            <div class="col-md-12 mb-3">
                                                <label for="validationCustom02">सामाग्रीको नाम</label>
                                                <input type="text" class="form-control" id="validationCustom02" name="txt13SamagriKoNam" placeholder="" required>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- /********************************** End १३. सहायक सामग्री प्रयोग गर्ने गरेको भए सामाग्रीको नाम.******************************************************/ -->
                                        <!-- /********************************** Start १४. अन्य व्यक्तिको सहयोग लिनु पर्ने भए त्यस्तो सहयोग लिनु पर्ने काम******************************************************/ -->
                                        <h4 class="card-title">१४. अन्य व्यक्तिको सहयोग लिनु पर्ने भए त्यस्तो सहयोग लिनु पर्ने काम</h4>
                                        <div class="form-row">
                                            <div class="col-md-12 mb-3">
                                                <label for="validationCustom02">कामको नाम</label>
                                                <input type="text" class="form-control" id="validationCustom02" name="txt14SahayogKoNam" placeholder="" required>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- /********************************** End १४. अन्य व्यक्तिको सहयोग लिनु पर्ने भए त्यस्तो सहयोग लिनु पर्ने काम******************************************************/ -->
                                        <!-- /********************************** Start १५. अन्य व्यक्तिको सहयोग बिना गर्न सक्ने दैनिक कार्य******************************************************/ -->
                                        <h4 class="card-title"><b>१५. अन्य व्यक्तिको सहयोग बिना गर्न सक्ने दैनिक कार्य</b></h4>
                                        <div class="form-row">
                                            <div class="col-md-12 mb-3">
                                                <label for="validationCustom02">कामको नाम</label>
                                                <input type="text" class="form-control" id="validationCustom02" name="txt15KaamGarnaSakine" placeholder="" required>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- /********************************** End १५. अन्य व्यक्तिको सहयोग बिना गर्न सक्ने दैनिक कार्य******************************************************/ -->
                                        <!-- /********************************** Start १६. कुनै तालिम प्राप्त गरेको भए मुख्य तालिमको नाम******************************************************/ -->
                                        <h4 class="card-title"><b>१६. कुनै तालिम प्राप्त गरेको भए मुख्य तालिमको नाम</b></h4>
                                        <div class="form-row">
                                            <div class="col-md-12 mb-3">
                                                <input type="text" class="form-control" id="validationCustom02" name="txt16Taalim" placeholder="" required>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- /********************************** End १६. कुनै तालिम प्राप्त गरेको भए मुख्य तालिमको नाम******************************************************/ -->
                                        <!-- /********************************** Start १७. हालको पेसा******************************************************/ -->
                                        <h4 class="card-title"><b>१७. हालको पेसा</b></h4>
                                        <div class="form-row">
                                            <div class="col-md-12 mb-3">
                                                <input type="text" class="form-control" id="validationCustom02" name="txt17Pesha" placeholder="" required>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- /********************************** End १७. हालको पेसा******************************************************/ -->
                                        <!-- /********************************** Start १८. विवरण उपलब्ध गराउने******************************************************/ -->
                                        <h4 class="card-title"><b>१८. विवरण उपलब्ध गराउने</b></h4>
                                        <div class="col-md-3 mb-3">
                                            <label class="ui-checkbox ui-checkbox-primary">
                                                <input type="checkbox">
                                                <span class="input-span"></span>संरक्षक र बुवा एउटै हुन्
                                            </label>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustom01">पुरा नाम</label>
                                                <input type="text" class="form-control" id="validationCustom01" name="txt18Nam" placeholder="टोल" required>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustom02">नाता</label>
                                                <select class="form-control" name="select18Nata">
                                                    <option value="">छन्नुहोस्...... </option>
                                                    <option value="mother">आमा</option>
                                                    <option value="sister">दिदी</option>
                                                    <option value="father">बुवा</option>
                                                    <option value="grandfather">हजुरबुबा</option>
                                                    <option value="grandmother">हजुरआमा</option>
                                                    <option value="uncle">काका</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustom02">ठेगाना</label>
                                                <input type="text" class="form-control" id="validationCustom02" name="txt18Address" placeholder="" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-3 mb-3">
                                                <label for="validationCustom02">सम्पर्क नं.</label>
                                                <input type="text" class="form-control" id="validationCustom02" name="txt18Phone" placeholder="" required>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="validationCustom02">नागरिकता नं</label>
                                                <input type="text" class="form-control" id="validationCustom02" name="txt18CitizenshipNo" placeholder="" required>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="validationCustom02">नागरिकता पाएको मिति</label>
                                                <input type="text" class="form-control" id="validationCustom02" name="txt18CitizenshipIssueDate" placeholder="" required>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="validationCustom02">नागरिकता पाएको स्थान</label>
                                                <input type="text" class="form-control" id="validationCustom02" name="txt18CitizenshipIssuedPlace" placeholder="" required>
                                            </div>
                                        </div>

                                        <hr>
                                        <!-- /********************************** End १८. विवरण उपलब्ध गराउने******************************************************/ -->
                                        <!-- /********************************** Start Subbmit Button ******************************************************/ -->

                                        <!-- <button class="btn btn-primary waves-effect waves-light" type="submit">Submit form</button> -->
                                        <input type="submit" class="btn btn-primary waves-effect waves-light" value="Submit">
                                        <!-- /********************************** End Subbmit Button ******************************************************/ -->
                                    </form>

                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row-->
                </div>
            </div>
            <!-- END PAGE CONTENT-->
            <footer class="page-footer">
                <div class="font-13">2018 © <b>AdminCAST</b> - All rights reserved.</div>
                <a class="px-4" href="http://themeforest.net/item/adminca-responsive-bootstrap-4-3-angular-4-admin-dashboard-template/20912589" target="_blank">BUY PREMIUM</a>
                <div class="to-top"><i class="fa fa-angle-double-up"></i></div>
            </footer>
        </div>
        
        
        
        
        
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
    <script>
        function Camera() {
            $('#clickme').show();
            $('#my_camera').show();
            Webcam.set({
                width: 400,
                height: 350,
                image_format: 'jpeg',
                jpeg_quality: 90
            });

            Webcam.attach('#my_camera');
        }

        function take_snapshot() {
            Webcam.snap(function(data_uri) {
                $(".image-tag").val(data_uri);
                document.getElementById('results').innerHTML = '<img  src="' + data_uri + '" height="150" width="150"/>';
                Webcam.reset('#my_camera');
                $('#my_camera').hide();
                $('#clickme').hide();

            });
        }

        $(document).ready(function() {
            $('#clickme').hide();
            // For Temporary Address
            $('#state').change(function() {
                let sid = $(this).val();
                $('#palika').html('<option disabled selected value="">छन्नुहोस्......</option>');
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: "{{route('getState')}}",
                    type: 'post',
                    data: 'sid=' + sid,
                    success: function(data) {
                        $('#district').html(data);
                    }
                });
            });

            // For Permanent Address
            $('#state2').change(function() {
                let sid = $(this).val();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: "{{route('getState')}}",
                    type: 'post',
                    data: 'sid=' + sid,
                    success: function(data) {
                        $('#district2').html(data);
                    }
                });
            });


            // Temporary Address
            $('#district').change(function() {
                let did = $(this).val();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: "{{route('getCity')}}",
                    type: 'post',
                    data: 'did=' + did,
                    success: function(data) {
                        $('#palika').html(data);
                    }
                });
            });

            // Permanent Address
            $('#district2').change(function() {
                let did = $(this).val();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: "{{route('getCity')}}",
                    type: 'post',
                    data: 'did=' + did,
                    success: function(data) {
                        $('#palika2').html(data);
                    }
                });
            });

        });
    </script>

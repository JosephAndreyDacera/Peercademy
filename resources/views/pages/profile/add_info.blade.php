@extends('layouts.basic')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-header"> <h3 class="text-green"><b>{{ __('Additional Information') }}</b></h3></div>
    
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                            @csrf   

                            <div class="row">
                                <div class="col-md-12">
                                    <label for="note" class="form-label">
                                        Please complete required <span class="text-danger">*</span> fields. The information you provided will help as verify your account.
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="course" class="form-label">Course <span class="text-danger">*</span></label>
                                        <select id="course" name="course" class="form-control">
                                            <option value="usa">Select</option>
                                            <option value="canada">Canada</option>
                                            <option value="uk">UK</option>
                                            <option value="australia">Australia</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="department" class="form-label">Department <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="department" placeholder="Enter your address" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="address" class="form-label">Address <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="address" placeholder="Enter your address" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="mobile" class="form-label">Mobile Number <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="mobile" placeholder="Enter your mobile number" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="birthdate" class="form-label">Birthdate <span class="text-danger">*</span></label>
                                        <input type="date" class="form-control" id="birthdate" placeholder="Enter your birthdate" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="file" class="form-label">E-copy Of Your Certificate of Registration (COR) <span class="text-danger">*</span></label>
                                        <input type="file" class="form-control" id="file" name="file" accept="application/pdf" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="bio" class="form-label">Personal Bio <span class="text-danger">*</span></label>
                                        <textarea class="form-control" id="bio" rows="3" placeholder="Enter your personal bio" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6"></div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <input type="checkbox" id="privacy" name="privacy" required>
                                        <label for="privacy">
                                            I agree to the <a href="/privacy-policy">Privacy Policy</a>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success float-end">Submit</button>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
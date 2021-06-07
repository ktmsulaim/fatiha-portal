@extends('layouts.website', ['pageTitle' => 'Application submitted'])

@section('content')
    @include('components.website.header', ['title' => 'Application submitted', 'subtitle' => null, 'urls' => [ 0 => ['label' => 'Applied'] ]])

    <section id="content">
        <div class="content-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mx-auto">
                        <div class="card">
                            <div class="card-header">Application summary</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <div class="style-msg successmsg">
                                        <div class="sb-msg"><i class="icon-thumbs-up"></i><strong>Well done!</strong> You application was submitted. We will contact you soon! Thank you for choosing us.</div>
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    </div>
                                    <table class="table">
                                        <tr>
                                            <th>Name</th>
                                            <td>{{ $application->name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td>{{ $application->email }}</td>
                                        </tr>
                                        <tr>
                                            <th>Name of father</th>
                                            <td>{{ $application->father_name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Age</th>
                                            <td>{{ $application->age }}</td>
                                        </tr>
                                        <tr>
                                            <th>Gender</th>
                                            <td>{{ $application->gender }}</td>
                                        </tr>
                                        <tr>
                                            <th>Time preference</th>
                                            <td>{{ $application->getTimePreference() }}</td>
                                        </tr>
                                        <tr>
                                            <th>Whatsapp</th>
                                            <td>{{ $application->whatsapp }}</td>
                                        </tr>
                                        <tr>
                                            <th>State</th>
                                            <td>{{ $application->state }}</td>
                                        </tr>
                                        <tr>
                                            <th>Country</th>
                                            <td>{{ $application->country }}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
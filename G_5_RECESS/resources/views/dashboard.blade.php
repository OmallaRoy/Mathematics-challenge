@extends('layouts.app', ['activePage' => 'dashboard', 'title' => 'Light Bootstrap Dashboard Laravel by Creative Tim & UPDIVISION', 'navName' => 'Dashboard', 'activeButton' => 'laravel'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card ">
                        <div class="card-header ">
                            <h4 class="card-title">{{ __('ADMIN ') }}</h4>
                            <div class="card-body">
                                <a href="{{ route('schools.createSchool') }}" class="btn btn-success mb-3">Upload Schools</a>
                                <a href="{{ route('analytics.bestPerformingSchools') }}" class="btn btn-success mb-3">Best Performing Schools</a>
                                
                                <a href="{{ route('schools.rankings') }}" class="btn btn-primary mb-3 ml-2">View School Rankings</a>
                                <a href="{{ route('analytics.performance') }}" class="btn btn-primary mb-3 ml-2">Performance</a>
                                <a href="{{ route('analytics.correctansweredquestions') }}" class="btn btn-primary mb-3 ml-2">View Most Correctly Answered Questions</a>
                                <a href="{{ route('analytics.incompleteChallenges') }}" class="btn btn-primary mb-3 ml-2">Incomplete Challenges</a>
                                <a href="{{ route('analytics.participantPerformance') }}" class="btn btn-primary mb-3 ml-2">Participant</a>
                                <a href="{{ route('analytics.schoolPerformance') }}" class="btn btn-primary mb-3 ml-2">School</a>
                                <!-- Adding Links for Reports -->
                                <a href="{{ route('report.show', ['participantId' => 1]) }}" class="btn btn-warning mb-3 ml-2">View Participant Report</a>
                                <a href="{{ route('report.download', ['participantId' => 1]) }}" class="btn btn-warning mb-3 ml-2">Download Participant Report</a>
                                <form method="POST" action="{{ route('report.send', ['participantId' => 1]) }}" style="display: inline;">
                                    @csrf
                                    <button type="submit" class="btn btn-warning mb-3 ml-2">Send Participant Report</button>
                                </form>
                            </div>
                        </div>
                        <div class="card ">
                            <div class="card-header ">
                                <h4 class="card-title">{{ __('Challenges ') }}</h4>
                                <div class="card-body ">
                                    <a href="{{ route('challenges.create') }}" class="btn btn-success mb-3">Create Challenge</a>
                                </div>
                                <div class="card-body ">
                                    <form method="POST" action="{{ route('analytics.schoolPerformance') }}">
                                        @csrf
                                        <div class="form-group">
                                            <label for="registrationNumber">Enter Registration Number:</label>
                                            <input type="text" class="form-control" id="registrationNumber" name="registration_number" required>
                                        </div>
                                        <button type="submit" class="btn btn-primary">View School Performance</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

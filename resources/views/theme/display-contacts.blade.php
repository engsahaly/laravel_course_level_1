@extends('theme.master')

@section('hero-title', 'Dispaly all Contacts')
@section('contact-active', 'active')

@section('content')

    <div class="untree_co-section">
        <div class="container">

            <div class="block">
                <div class="row justify-content-center">


                    <div class="col-md-8 col-lg-8 pb-4">


                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Category</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($data) > 0)
                                    @foreach ($data as $key => $contact)
                                        <tr>
                                            <th scope="row">{{ $data->firstItem() + $loop->index }}</th>
                                            <td>{{ $contact->first_name }}</td>
                                            <td>{{ $contact->last_name }}</td>
                                            <td>{{ $contact->email }}</td>
                                            <td>{{ $contact->category?->name }}</td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>

                        {{ $data->render('pagination::bootstrap-4') }}

                    </div>

                </div>

            </div>

        </div>
    </div>

@endsection

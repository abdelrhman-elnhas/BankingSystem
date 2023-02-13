
@extends('Includes.head')

@push('style')

<link rel="stylesheet" href="css/customers.css">

@endpush

@section('body')

    <div class="container-fluid bar">
        <div class="row" style="position:relative">
            <div class="info col-lg-10 p-3 ps-5">
                <p class="name"><span>Name:</span> {{$user ? $user->name : ''}}</p>
                <p class="age"><span>Age:</span> {{$user ? $user->age : ''}}</p>
                <p class="number"><span>Phone Number:</span> {{$user ? $user->phone : ''}}</p>
            </div>
            <div class="wallet col-lg-2 text-center">
                <p class="walletname">Balance</p>
                <p style="font-size:42px;" class="amount">${{$user ? $user->balance : ''}}</p>
                <div class="transfer">
                    <a class="transferBtn" data-bs-toggle="modal" data-bs-target="#exampleModal">Transfer Now !</a>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Transfer Money</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="{{url('transfer')}}" method="post">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Name</span>
                                            <select class="form-control" name="userid" id="">
                                                <option selected>Select User</option>
                                                @foreach ($customers as $customer)
                                                    <option value="{{$customer->id}}">{{$customer->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="input-group mb-3">
                                        <span class="input-group-text">$</span>
                                        <input type="text" class="form-control" name="balance" aria-label="Amount (to the nearest dollar)">
                                        <span class="input-group-text">.00</span>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" style="background-color: var(--first); color:var(--light);" data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit" id="liveToastBtn" class="btn" style="background-color: var(--sec);  color:var(--light);">Transfer</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Toast -->
                    @include('../includes/toast')
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper">
        <div class="table">
            <div class="rowt header main">
                <div class="cell">
                Name
                </div>
                <div class="cell">
                ID
                </div>
                <div class="cell">
                Available Balance
                </div>
                <div class="cell">
                Phone Number
                </div>
                <div class="cell">
                Account Status
                </div>
            </div>

            @foreach ($customers as $customer)
                <div class="rowt">
                    <div class="cell">
                    {{$customer->name}}
                    </div>
                    <div class="cell">
                    {{$customer->id}}
                    </div>
                    <div class="cell">
                    {{$customer->balance}}$
                    </div>
                    <div class="cell">
                    {{$customer->phone}}
                    </div>
                    <div class="cell">
                    {{$customer->status}}
                    </div>
                </div>

            @endforeach
        </div>
    </div>


@endsection

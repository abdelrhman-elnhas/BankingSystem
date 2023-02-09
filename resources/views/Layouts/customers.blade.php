@extends('Includes.head')

@push('style')

<link rel="stylesheet" href="css/customers.css">

@endpush

@section('body')

    <div class="bar">
                    <div class="info">
                    <p class="name"><span>Name:</span> Abdelrhman Ahmed Elnhas</p>
                    <p class="age"><span>Age:</span> 23</p>
                    <p class="number"><span>Phone Number:</span> +201127698622</p>
                    </div>
                    <div class="wallet">
                    <p class="walletname">MasterCard</p>
                    <p class="amount">$15000</p>
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
                            <div class="modal-body">
                                <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Name</span>
                                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                <span class="input-group-text">$</span>
                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                <span class="input-group-text">.00</span>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" style="background-color: var(--first); color:var(--light);" data-bs-dismiss="modal">Cancel</button>
                                <button type="button" id="liveToastBtn" class="btn" style="background-color: var(--sec);  color:var(--light);">Transfer</button>
                            </div>
                            </div>
                        </div>
                        </div>

                        <!-- Toast -->
                        <div class="toast-container position-fixed bottom-0 end-0 p-3">
                        <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                            <div class="toast-header">
                            <strong class="me-auto">Transfer Reciept</strong>
                            <small>1 min ago</small>
                            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                            </div>
                            <div class="toast-body">
                            Ahmed recieved 20$
                            </div>
                        </div>
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

            <div class="rowt">
                <div class="cell" data-title="name">
                Ahmed Mohamed Mahmoud
                </div>
                <div class="cell" data-title="id">
                1
                </div>
                <div class="cell" data-title="balance">
                1000$
                </div>
                <div class="cell" data-title="phone">
                01000000000
                </div>
                <div class="cell" data-title="Status">
                Active
                </div>
            </div>

            <div class="rowt">
                <div class="cell" data-title="name">
                Salma Mohamed Ahmed
                </div>
                <div class="cell" data-title="id">
                2
                </div>
                <div class="cell" data-title="balance">
                120$
                </div>
                <div class="cell" data-title="phone">
                01111111111
                </div>
                <div class="cell" data-title="Status">
                Closed
                </div>
            </div>

            <div class="rowt">
                <div class="cell" data-title="name">
                Mahmoud Ahmed Saad
                </div>
                <div class="cell" data-title="id">
                3
                </div>
                <div class="cell" data-title="balance">
                2500$
                </div>
                <div class="cell" data-title="phone">
                01222222222
                </div>
                <div class="cell" data-title="Status">
                Susbended
                </div>
            </div>
            </div>
            </div>
        </div>


@endsection

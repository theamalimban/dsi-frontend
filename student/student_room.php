<!--Student Room-->
<div class="student_rooms">
    <!-- Page header -->
    <div class="row">
        <div class="col-8">
            <span class="title">
                Room Reservations
            </span>
        </div>
        <div class="col-1"></div>
        <div class="col-3 px-0">
            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#reservation">
                Reserve
            </button>
            <!-- Reservation Form popup-->
            <div class="modal fade" id="reservation" tabindex="-1" aria-labelledby="reservationLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="reservation">Reservation Form</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">From:</label>
                                    <input type="time" class="form-control" id="recipient-name">
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">To:</label>
                                    <input type="time" class="form-control" id="recipient-name">
                                </div>
                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Reason of Reservation:</label>
                                    <textarea class="form-control" id="message-text"></textarea>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn" data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="btn" data-bs-target="#messageToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="messageToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                        The form has been submitted. Please wait for the request to be approved.
                    </div>
                    <div class="modal-footer">
                        <button class="btn" data-bs-target="#exampleModalToggle2" data-bs-dismiss="modal">Okay</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <!-- calendar and timeslot-->
    <div class="date_time">
        <div class="row">
            <div class="col-6 px-0">
                <div class="calendar_title">Calendar</div>
                <!-- calendar goes here-->
            </div>
            <div class="col-1 px-0"></div>
            <!-- for time slots -->
            <div class="col-5 px-0" style="">
                <div class="time_title">Time Slots</div>
                <div class="row mx-auto" id="time_slots">
                    <div class="col-6 px-0">
                        <button>07:00 AM - 08:00 AM</button>
                        <button>08:00 AM - 09:00 AM</button>
                        <button>09:00 AM - 10:00 AM</button>
                        <button>10:00 AM - 11:00 AM</button>
                        <button>11:00 AM - 12:00 PM</button>
                        <button>12:00 PM - 01:00 PM</button>
                        <button>01:00 PM - 02:00 PM</button>
                    </div>
                    <div class="col-6 px-0">
                        <button>02:00 PM - 03:00 PM</button>
                        <button>03:00 PM - 04:00 PM</button>
                        <button>04:00 PM - 05:00 PM</button>
                        <button>05:00 PM - 06:00 PM</button>
                        <button>06:00 PM - 07:00 PM</button>
                        <button>07:00 PM - 08:00 PM</button>
                        <button>08:00 PM - 09:00 PM</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <!-- Individual Room Reservation -->
    <div class="accordion" id="rooms">
        <div class="accordion-item">
            <h2 class="accordion-header" id="roomDescription">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <strong>301</strong>&nbsp Lecture Room
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <h4>Reserved Rooms</h4>
                    <ul class="nav justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link" href="#">7:00 AM - 8:00 AM</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">7:00 AM - 8:00 AM</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">7:00 AM - 8:00 AM</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
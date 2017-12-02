<section class="section-check-availability">
    <div class="container">
        <div class="check-availability">
            <div class="row">
                <div class="col-lg-3">
                    <h2>CHECK AVAILABILITY</h2>
                </div>
                <div class="col-lg-9">
                    <form action="{{route('seachroom.seachroom')}}" method="get" id="myform">
                        {{ csrf_field() }}
                        <div class="availability-form">
                            <input type="text" id="arrive" name="arrive" class="awe-calendar from"
                                   placeholder="Arrival Date" required="date">
                            <input type="text" id="departure" name="departure" class="awe-calendar to"
                                   placeholder="Departure Date" required="date">
                            <select class="awe-select" id="amount_people" name="amount_people">
                                <option>2</option>
                                <option>4</option>
                                <option>6</option>
                            </select>
                            <select class="awe-select" id="roomtypeid" name="roomtypeid">
                                <option value="1">Vip</option>
                                <option value="2">Deluxe</option>
                                <option value="3">Family</option>
                            </select>
                            <div class="vailability-submit">
                                <button class="awe-btn awe-btn-13" value="validate">FIND THE BEST RATE</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
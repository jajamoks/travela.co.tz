<div class="col-md-6">
    <div class="card">
        <div class="card-header">
            Select Seat
        </div>
        <div class="card-body card-block">
            <div class="seatChartsContainer">
                @foreach ($all_seats as $all_seat)
                <div class="seatCharts-cell seatCharts-space" onkeyup="this.setAttribute('value', this.value);" value="{{$all_seat->status}}">{{$all_seat->id}}</div>
                @endforeach
            </div>

        <div class="seatInfoContainer">
            <div class="seatCharts-row">
                <div class="seatCharts-cell seatCharts-space" value="Booked"></div>
                <div> Booked</div>
            </div>
            <div class="seatCharts-row">
                <div class="seatCharts-cell seatCharts-space" value="Available"></div>
                <div> Available</div>
            </div>
            <div class="seatCharts-row">
                <div class="seatCharts-cell seatCharts-space" value="Reserved"></div>
                <div> Reserved</div>
            </div>
        </div>
    </div>
</div>
</div>

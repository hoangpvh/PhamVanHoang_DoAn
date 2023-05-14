<div>
    <div
        style="background-color:#c5ffff;text-align: center;border-color: green; border-style: solid; border-width: 5px;">
        <h4 style="text-align: center">Cảm ơn quý khách đã sử dụng dịch vụ của chúng tôi,<br>
            Booking của quý khách đã được chúng tôi tiếp nhận
        </h4>
    </div>
    <h2>Phiếu tiếp nhận booking</h2>
    Mã tour: <b> {{ $book->b_tour_id }} </b> <br>
    Tên tour: <b> {{ $tour->t_title }} </b><br>
    Ngày đi: <b> {{ $tour->t_start_date }} </b><br>
    Điểm khởi hành: <b> {{ $tour->t_starting_gate }} </b><br>
    <div style="background-color:#ddd;margin-top:8px">
        <div style="margin-left:8px">
            Mã booking: <b style="color:red"> {{ $book->id }}</b><br>
            <b style="color:red">Xin quý khách vui lòng nhớ số booking để thuận tiện cho giao dịch sau này</b><br>
            @php
                $totalPrice = $book->b_number_adults * $book->b_price_adults + $book->b_number_children * $book->b_price_children + $book->b_number_child2 * $book->b_price_child2 + $book->b_price_child6 * $book->b_number_child6;
            @endphp
            Trị giá booking: <b>{{ number_format($totalPrice, 0, ',', '.') }} vnd </b><br>
            Ngày booking:<b> {{ $book->created_at }}</b><br>
            Thời hạn xác nhận:<b> 3 ngày sau booking</b><br>
            <b style="color:red"> Quý khách có thể quản lý booking tại thông tin khách hàng</b>
        </div>
    </div style="margin-top:8px">
    Họ tên:<b>{{ $user->name }}</b><br>
    Email: <b>{{ $user->email }}</b><br>
    Số điện thoại: <b>{{ $user->phone }}</b><br>
    Địa chỉ: <b>{{ $user->address }} </b>
    <div style="background-color:#ddd;margin-top:8px">
        <div style="margin-left:8px">
            <p><b>Số lượng người tham gia</b><br>
                Người lớn:<b>{{ $book->b_number_adults }}</b><br>
                Trẻ em: <b>{{ $book->b_number_children }}</b><br>
                Trẻ em (2-6 tuổi): <b>{{ $book->b_number_child6}}</b><br>
                Trẻ em (dưới 2 tuổi): <b>{{ $book->b_number_child2}}</b>
            </p>
        </div>
    </div>

</div>



<h2>Medical Support System | Report</h2>
<hr>
<br>
<br>
<table>
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Customer Name</th>
                          <th>Item List</th>
                          <th>Delivery Address</th>
                          <th>Contact Number</th>
                          <th>Total Bill</th>
                          <th>Payment Type</th>
                          <th>Status</th>
                          <th>Date</th>
                          
                        </tr> 
                      </thead>


                  
                        @foreach ($req as $re)
                             <tbody>
                                  <tr>
                          
                                    <th>{{ $re->id }}</th>
                                    <td>{{ $re->user_name }}</td>
                                    <td>@foreach($re->request_list->items as $item)
               {{$item['item']['item_name']}}  ({{$item['qty']}})<br>
             @endforeach</td>
                                    <td>{{ $re->delivery_address }}</td>
                                    <td>{{ $re->user->contact_no }}</td>
                                    <td>{{ $re->total_bill }}</td>
                                    <td>{{$re->payment_type ? $re->payment_type : 'Cash On Delivery'}}</td>
                                    <td>{{$re->status ? $re->status : 'Pending'}}</td>
                                    <td>{{ $re->updated_at->diffForHumans() }} </td>
                                    

                                    
                                 </tr>
                             </tbody>
                         
                        @endforeach
                    

     </table>
<hr>

</body>
</html>
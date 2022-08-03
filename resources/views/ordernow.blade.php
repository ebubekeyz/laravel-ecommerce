<x-layout>
    @include('partials._header')

    <div class="custom-product" >
        <div class="col-sm-10 m-auto" >
          
            
            <table class="table mt-3">
               
                <tbody>
                  <tr>
                    
                    <td colspan="2">Amount</td>
                    <td>₦{{$total}}</td>
                   
                  </tr>
                  <tr>
                    
                    <td colspan="2">Tax</td>
                    <td>₦0</td>
                   
                  </tr>
                  <tr>
                    
                    <td colspan="2">Delivery Charges</td>
                    <td>₦10</td>
                  </tr>
                  <tr>
                    
                    <td colspan="2">Total Amount</td>
                    <td>₦{{$total + 10}}</td>
                  </tr>
                </tbody>
              </table> 

              <form action="/orderplace" method="post" class="row g-3">
                @csrf
                <div class="mb-1 mx-2">
                    <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                    <textarea name="address" class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea><br><br>
                  
                  <label for="inputPassword2" class="me-3"><b>Choose Payment Method</b></label><br><br>
                  <input value="online-payment" class="me-2" type="radio" name="payment"><span>Online Payment</span><br><br>
                  <input value="EMI-Payment" class="me-2" type="radio" name="payment"><span>EMI Payment</span><br><br>
                  <input value="Payment-Delivery" class="me-2" type="radio" name="payment"><span>Payment on Delivery</span><br><br>
                  <button type="submit" class="btn btn-dark">Order Now</button>
                </div>
               
              </form>

        </div>
        
    




               </div>
             </div>

             @include('partials._footer')

</x-layout>
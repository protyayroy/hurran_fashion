<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Invoice</title>

<style type="text/css">
    * {
        font-family: Verdana, Arial, sans-serif;
    }
    table{
        font-size: x-small;
    }
    tfoot tr td{
        font-weight: bold;
        font-size: x-small;
    }
    .gray {
        background-color: lightgray
    }
    .font{
      font-size: 15px;
    }
    .authority {
        /*text-align: center;*/
        float: right
    }
    .authority h5 {
        margin-top: -10px;
        color: green;
        /*text-align: center;*/
        margin-left: 35px;
    }
    .thanks p {
        color: green;;
        font-size: 16px;
        font-weight: normal;
        font-family: serif;
        margin-top: 20px;
    }
</style>

</head>
<body>

  <table width="100%" style="background: #F7F7F7; padding:0 20px 0 20px;">
    <tr>
        <td valign="top">
          <!-- {{-- <img src="" alt="" width="150"/> --}} -->
          <h2 style="color: green; font-size: 26px;"><strong>Hurran Fashion</strong></h2>
        </td>
        <td align="right">
            <pre class="font" >
               Hurran Fashion Head Office
               Email:example@gmail.com <br>
               Mob: 1245454545 <br>
               Your Address <br>

            </pre>
        </td>
    </tr>

  </table>


  <table width="100%" style="background:white; padding:2px;"></table>

  <table width="100%" style="background: #F7F7F7; padding:0 5 0 5px;" class="font">
    <tr>
        <td>
          <p class="font" style="margin-left: 20px;">
           <strong>Name:</strong>{{ $shipping->first_name }} {{ $shipping->last_name }}<br>
           <strong>Email:</strong> {{ $shipping->email }} <br>
           <strong>Phone:</strong>{{ $shipping->phone }} <br>

           <strong>Address:</strong> {{ $shipping->address }}<br>
           <strong>Post Code:</strong>{{ $shipping->zipcode }}
         </p>
        </td>
        <td>
          <p class="font">
            <h3><span style="color: green;">Invoice:</span> #Invoice No</h3>
            Order Date: {{ $order->created_at }} <br>
             Delivery Date: <?php echo date("d-M-Y")?><br>
            Payment Status :
            <select name="payment_status" id="payment_status" class="form-control" disabled>
              <option @if ($shipping->payment_status == "1") selected @endif value="1">Paid</option>
              <option @if ($shipping->payment_status == "2") selected @endif value="2">Pending</option>
            </select>
           </span>
         </p>
        </td>
    </tr>
  </table>
  <br/>
<h3>Products</h3>


  <table width="100%">
    <thead style="background-color: green; color:#FFFFFF;">
      <tr class="font">
        <!-- <th>Image</th> -->
        <th>Product Name</th>
        <th>Size</th>
        <th>Color</th>
        <th>Code</th>
        <th>Quantity</th>
        <th>Vendor</th>
        <th>Total </th>
      </tr>
    </thead>
    <tbody>

      <tr class="font">
        <!-- <td align="center">
            <img style="width: 90px;height: 50px;" src="{{ asset('images/'. $order->product->thumbnail) }}" alt="thumbnail">
        </td> -->
        <td align="center">{{ $order->product->title ?? 'N/A'}}</td>


         <td align="center">{{ $order->get_size->size_name ?? 'N/A'}}</td>

          <td align="center">{{ $order->get_color->color_name ?? 'N/A'}}</td>

         <td align="center"> {{ $order->product->id ?? 'N/A'}}</td>


        <td align="center">{{ $order->quantity ?? 'N/A'}}</td>
        <td align="center">{{ $order->product->store_id ?? 'N/A'}}</td>

        <td align="center">{{ $order->quantity * $order->product_unit_price ?? 'N/A'}}</td>

      </tr>

    </tbody>
  </table>
  <br>
  <table width="100%" style=" padding:0 10px 0 10px;">
    <tr>
        <td align="right" >
            <h2><span style="color: green;">Subtotal:</span>{{ $order->quantity * $order->product_unit_price ?? 'N/A'}}</h2>
            <h2><span style="color: green;">Total:</span> {{ $order->quantity * $order->product_unit_price ?? 'N/A'}}</h2>
             <h2><span style="color: green;">Full Payment PAID</h2>
        </td>
    </tr>
  </table>
  <div class="thanks mt-3">
    <p>Thanks For Buying Products..!!</p>
  </div>
  <div class="authority float-right mt-5">
      <p>-----------------------------------</p>
      <h5>Authority Signature:</h5>
    </div>
</body>
</html>


<!-- The header element will appear on the top of each page of this estimate document. -->
<header>
  <div class="headerSection">
    <!-- As a logo we take an SVG element and add the name in an standard H1 element behind it. -->
    <div class="logoAndName">
      <svg>
        <circle cx="50%" cy="50%" r="40%" stroke="black" stroke-width="3" fill="black" />
      </svg>
      <h1>Clients Listes</h1>
    </div>
    <!-- Details about the estimation are on the right top side of each page. -->
    <div>
      <h2>Year : {{now()->format('Y')}}
</h2>
      <p>
        <b>File Date </b> {{now()}}
      </p>
      <p>
      </p>
    </div>
  </div>
  <!-- The two header rows are divided by an blue line, we use the HR element for this. -->
  <hr />
  <div class="headerSection">
 
    <!-- Additional notes can be placed below the estimation details. -->
    
  </div>
</header>



<!-- In the main section the table for the separate items is added. Also we add another table for the summary, so subtotal, tax and total amount. -->
<!-- In the main section the table for the separate items is added. Also we add another table for the summary, so subtotal, tax and total amount. -->
<main>


<table>
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>email</th>
        <th>Address</th>
        <th>Phone</th>
        <th>Date of Join </th>
      </tr>
    </thead>
    <!-- The single estimate items are all within the TBODY of the table. -->
    <tbody>
      @foreach($clients as $client)
      <tr>
        <td><small>{{$client->id}}</small></td>
        <td><small>{{$client->nom}}</small></td>
        <td><small>{{$client->email}}</small></td>
        <td><small>{{$client->adresse}}</small></td>
        <td><small>{{$client->telephone}}</small></td>
        <td><small>{{$client->created_at}}</small></td>
      </tr>
      @endforeach
    </tbody>
  </table>

</main>

<!-- Within the aside tag we will put the terms and conditions which shall be shown below the estimate table. -->

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

 </body>

</html>

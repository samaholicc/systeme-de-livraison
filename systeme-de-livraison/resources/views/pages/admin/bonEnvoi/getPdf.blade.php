<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-Style-Type" content="text/css" />
    <meta name="generator" content="Aspose.Words for .NET 24.4.0" />
    <title></title>
    <style type="text/css">
         body {
            font-family: "Times New Roman";
            font-size: 12pt
        }

        p {
            margin: 0pt
        }

        table {
            margin-top: 0pt;
            margin-bottom: 0pt
        }
        table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  border: 1px solid #fff; /* Border color */
  padding: 8px; /* Padding inside cells */
  text-align: left; /* Align text to the left */
}
        .table {
  border-collapse: collapse;
  width: 100%;
}

.td {
  border: 1px solid #242424; /* Border color */
  padding: 8px; /* Padding inside cells */
  text-align: left; /* Align text to the left */
}

/* Style the header row */
th {
  background-color: #f2f2f2; /* Background color for header */
  color: #000; /* Text color for header */
}
    </style>
</head>

<body>
  
  <table>
    <tr>
      <td style="width: 50%">
        <img width="400" src="{{ $img }}" alt="Image">
      </td>
      <td style="width: 50%">
        <div class="">
          <p>LIVRAISON</p>
          <p>
              Adresse: SYSTEME GESTION SOCIETE LIVRAISON :<br>
              Telephone: 0600000000<br>
              Email: Contact@livraison.com<br>
              Website: https://livraison.com/
          </p>
        </div>
      </td>
    </tr>
  </table>
    
  <hr>
  <table >
    <tr>
      
      <td style="position: relative">
        <div style=" border-style: solid; margin-bottom: 10px; padding: 10px;width:300px;height:100px">
          <div class="colis grid-item--full">
              <span >Bon de envoi:</span>
              <span>{{ $bon->id_BE }}</span>
          </div>
          <div class="colis grid-item--full">
              <span >Date: </span>
              <span>{{ $bon->created_at }}</span>
          </div>
          <div class="colis grid-item--full">
              <span >Colis:</span> 
              <span>{{ $bon->colis_count }}</span> 
          </div>

          <div class="total">
              <span >Total:</span>
              <span> {{ $bon->prix_total }} Dhs</span>
          </div>
      </div>
      </td>
      <td>
        {{-- <img src="{{ $ }}" alt=""> --}}
      </td>
    </tr>
  </table>

  <table class="table">
    <tr style="height:15.6pt; -aw-height-rule:exactly">
        <td class="td"><p style="font-size:8pt"><span style="font-family:Calibri">Numero</span></p>        </td>
        <td class="td"><p style="font-size:8pt"><span style="font-family:Calibri">Code d envoi</span></p>        </td>
        <td class="td"><p style="font-size:8pt"><span style="font-family:Calibri">Nom Magazin</span></p>        </td>
        <td class="td"><p style="font-size:8pt"><span style="font-family:Calibri">Telephone</span></p>        </td>
        <td class="td" ><p style="font-size:8pt"><span style="font-family:Calibri">Information</span></p>        </td>
        <td class="td"><p style="font-size:8pt"><span style="font-family:Calibri">Crbt</span></p>       </td>
    </tr>
    @foreach($colis as $i=>$item)

      <tr style="height:18.65pt; -aw-height-rule:exactly">
          <td class="td"><p style="font-size:8pt"><span style="font-family:Calibri"> {{ $i+1 }} </span></p>
          </td>
          <td class="td"><p style="font-size:8pt"><span style="font-family:Calibri"> {{ $item->code_d_envoi }} </span></p>
          <td class="td"><p style="font-size:8pt"><span style="font-family:Calibri"> {{ $item->client->nommagasin }} </span> <br>
             <span style="font-family:Calibri">{{ $item->client->Phone }}</span></p>
          </td>
          <td class="td"><p style="font-size:8pt"><span style="font-family:Calibri"> {{ $item->telephone }} </</span></p>
          </td>
          <td class="td"> <p style="font-size:8pt">
            <span style="font-family:Calibri"> Ville: {{ $item->ville->villename }} </</span><br>
            <span style="font-family:Calibri"> Adress: {{ $item->adresse }} </</span>
            <span style="font-family:Calibri"> commentaire: {{ $item->commentaire }} </</span>
          </p>
          </td>
          <td class="td"> <p style="font-size:8pt"><span style="font-family:Calibri"> {{ $item->prix }}  Dhs</span></p>
          </td>
      </tr>
 
      @endforeach
      <tr style="height:18.65pt; -aw-height-rule:exactly">
        <td class="td" colspan="5">Total</td>
          <td class="td"><p style="font-size:8pt"><span style="font-family:Calibri"> {{ $bon->prix_total }} </span></p></td>
         
      </tr>
  </table>
    <br>


    
    
  
    
</body>

</html>
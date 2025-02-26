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
        {{-- <div class="" ><img src="{{ public_path('storage/images/logo.png') }}" alt=""></div> --}}
      </td>
      <td style="width: 50%">
        <div class="">
          <p style="font-size: 14px"><strong>LIVRAISON</strong> </p>
          <p style="font-size: 14px">
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
        <div style=" border-style: solid; margin: 10px; padding: 10px; width:300px;height:100px">
          <strong >Client:</strong>
          <span>{{ $bon->nomcomplet }}</span><br>
          <strong >Téléphone:</strong> 
          <span>{{ $bon->telephone }}</span><br>
          <strong >Banque:</strong> 
          <span>{{ $bon->nombanque }}</span><br>
          <strong >Compte:</strong> 
          <span>{{ $bon->numerocompte }}</span>
      </div>
      </td>
      <td style="position: relative">
        <div style=" border-style: solid; margin: 10px; padding: 10px;width:300px;height:100px">
          <div class="colis grid-item--full">
              <strong >Bon de livraison:</strong>
              <span>{{ $bon->id_F }}</span>
          </div>
          <div class="colis grid-item--full">
              <strong >Date: </strong>
              <span>{{ $bon->created_at }}</span>
          </div>
          <div class="colis grid-item--full">
              <strong >Colis:</strong> 
              <span>{{ $bon->colis_count }}</span> 
          </div>

          <div class="total">
              <strong >Total:</strong>
              <span> {{ $total }} Dhs</span>
          </div>
      </div>
      </td>
    </tr>
  </table>

  <table class="table">
    <tr style="height:15.6pt; -aw-height-rule:exactly">
        <td class="td"><p style="font-size:8pt"><span style="font-family:Calibri">Num</span></p>        </td>
        <td class="td"><p style="font-size:8pt"><span style="font-family:Calibri">Code d envoi</span></p>        </td>
        <td class="td"><p style="font-size:8pt"><span style="font-family:Calibri">Telephone</span></p>        </td>
        <td class="td" ><p style="font-size:8pt"><span style="font-family:Calibri">Ville</span></p>        </td>
        <td class="td"><p style="font-size:8pt"><span style="font-family:Calibri">Crbt</span></p>       </td>
        <td class="td"><p style="font-size:8pt"><span style="font-family:Calibri">Frais</span></p>       </td>
        <td class="td"><p style="font-size:8pt"><span style="font-family:Calibri">Total</span></p>       </td>
    </tr>
   
    @foreach($colis as $i=>$item)
      <tr style="height:18.65pt; -aw-height-rule:exactly">
          <td class="td"><p style="font-size:8pt"><span style="font-family:Calibri"> {{ $i+1 }} </span></p>
          </td>
          <td class="td"><p style="font-size:8pt"><span style="font-family:Calibri"> {{ $item->code_d_envoi }} </span></p>
          </td>
          <td class="td"><p style="font-size:8pt"><span style="font-family:Calibri"> {{ $item->telephone }} </</span></p>
          </td>
          <td class="td"> <p style="font-size:8pt"><span style="font-family:Calibri"> {{ $item->villename }} </</span></p>
          </td>
          <td class="td"> <p style="font-size:8pt"><span style="font-family:Calibri"> {{ $item->prix }}  Dhs</span></p>
          </td>
          <td class="td"> <p style="font-size:8pt"><span style="font-family:Calibri"> {{ $item->prixlivraison }}  Dhs</span></p>
          </td>
          <td class="td"> <p style="font-size:8pt"><span style="font-family:Calibri"> {{ $item->prix - $item->prixlivraison }}  Dhs</span></p>
          </td>
      </tr>
      

      @endforeach
      <tr style="height:18.65pt; -aw-height-rule:exactly">
          <td class="td" colspan="6" ><p style="font-size:8pt"><strong style="font-family:Calibri">Prix Total </strong></p></td>
          <td class="td" ><p style="font-size:8pt"><span style="font-family:Calibri"> {{ $totalColis }} </span></p></td>
         
      </tr>
  </table>
    <br>
    <table class="table">
      <tr style="height:15.6pt; -aw-height-rule:exactly">
          <td class="td"><p style="font-size:8pt"><span style="font-family:Calibri">Total Brut</span></p>        </td>
          <td class="td"><p style="font-size:8pt"><span style="font-family:Calibri"> {{ $bon->prix_total }} DH</span></p>        </td>
      </tr>
     
        <tr style="height:18.65pt; -aw-height-rule:exactly">
            <td class="td"  ><p style="font-size:8pt"><strong style="font-family:Calibri"> Frais </strong></p></td>
            <td class="td" ><p style="font-size:8pt"><span style="font-family:Calibri"> {{ $bon->frais_total }} DH </span></p></td>
           
        </tr>
        <tr style="height:18.65pt; -aw-height-rule:exactly">
            <td class="td"  ><p style="font-size:8pt"><strong style="font-family:Calibri">Autre Frais </strong></p></td>
            <td class="td" ><p style="font-size:8pt"><span style="font-family:Calibri"> {{ $bon->autre_frais??0 }} DH</span></p></td>
           
        </tr>
        <tr style="height:18.65pt; -aw-height-rule:exactly">
            <td class="td"  ><p style="font-size:8pt"><strong style="font-family:Calibri"> Prix Total Net </strong></p></td>
            <td class="td" ><p style="font-size:8pt"><span style="font-family:Calibri"> {{ $total}} DH </span></p></td>
           
        </tr>
    </table>
<br>
    <strong style="font-family:Calibri"> ELM Express Livraison Vous remercier pour votre confiance    </strong>
    
  
    
</body>

</html>
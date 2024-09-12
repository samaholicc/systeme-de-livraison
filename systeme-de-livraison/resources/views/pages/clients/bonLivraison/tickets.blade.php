<!DOCTYPE html>
            <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Colis Sticker</title>
                    <link href="../../../public/storage/assets/home-page/css/bootstrap.min.css" />
                    <style>
                        body {
            font-family: "Times New Roman";
            font-size: 12pt
        }

        p {
            margin: 0pt
        }

        table {
            margin-top: 0pt;
            margin-bottom: 0pt;
            font-size: 12px
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
.sticker{
    /* width: 45%;
    height: 45%; */
    border: #000 3px solid;
    display: relative;

}
</style>
</head>
<body>
    <table>
        <tr>
        @foreach ($colis as $i=>$c)
            <td>
                <div class="sticker " >
                    <table>
                        <tr>
                            <td colspan="3">
                                <div class="info">
                                    <span>Date:</span> {{ $c->created_at }}
                                </div>
                                <div class="info">
                                    <span>Vendeur:</span> {{ $c->client->nomcomplet }} ( {{ $c->client->Phone }} )
                                </div>
                            </td>
                            <td></td>
                        
                            <td>

                                <img width="100" src="{{ $img }}" alt="Image">

                            </td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td>
                                <table class="table">
                                    <tr>
                                        <td class='td'><strong>Destinataire:</strong></td>
                                        <td class='td'>{{ $c->destinataire  }}</td>
                                    </tr>
                                    <tr>
                                        <td class='td'><strong>Téléphone:</strong></td>
                                        <td class='td'>{{ $c->telephone  }}</td>
                                    </tr>
                                    <tr>
                                        <td class='td'><strong>Adresse:</strong></td>
                                        <td class='td'>{{ $c->adresse  }}</td>
                                    </tr>
                                    <tr>
                                        <td class='td'><strong>Commentaire:</strong></td>
                                        <td class='td'>{{ $c->commentaire  }}</td>
                                    </tr>
                                    <tr>
                                        <td class='td'><strong>Produit:</strong></td>
                                        <td class='td'>{{ $c->adresse  }}</td>
                                    </tr>
                                </table>
                            </td>
                            <td>
                                <table class="table">
                                    <tr>
                                        <td class='td' colspan="4"><strong>Ramasse</strong></td>
                                    </tr>
                                    <tr>
                                        <td class='td'><strong>PR</strong></td>
                                        <td class='td'></td>
                                        <td class='td'></td>
                                        <td class='td'></td>
                                    </tr>
                                    <tr>
                                        <td class='td'><strong>IJ</strong></td>
                                        <td class='td'></td>
                                        <td class='td'></td>
                                        <td class='td'></td>
                                    </tr>
                                    <tr>
                                        <td class='td'><strong>RB</strong></td>
                                        <td class='td'></td>
                                        <td class='td'></td>
                                        <td class='td'></td>
                                    </tr>
                                    <tr>
                                        <td class='td'><strong>AN</strong></td>
                                        <td class='td'></td>
                                        <td class='td'></td>
                                        <td class='td'></td>
                                    </tr>
                                    <tr>
                                        <td class='td'><strong>RF</strong></td>
                                        <td class='td'></td>
                                        <td class='td'></td>
                                        <td class='td'></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                    
                    
                <table class="table " >
                    <tr>
                        <td><strong>Total</strong></td>
                        <td><strong>{{ $c->prix }}</strong></td>
                    </tr>
                    <tr>
                        <td><strong>Interdit d\'ouvrir</strong></td>
                        <td><div class="badge">Colis normal</div></td>
                    </tr>
                </table>
                <div class="barcode"></div>
            </div>
            </td>
            @php
                $r=$i%2;

            @endphp
            @if ($r!==0)
            </tr><tr>
            @endif
        
        @endforeach
        </tr>
    </table>
</body>
</html>
<html>
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <meta http-equiv="Content-Style-Type" content="text/css" />
            <meta name="generator" content="Aspose.Words for .NET 24.4.0" />
            <title></title>
            <style type="text/css">
             @page {
                margin: 5px;
            }
            body {
                margin: 0;
                padding: 0;
                font-family: Arial, sans-serif;
            }
                body {
                    font-family: "Times New Roman";
                    font-size: 14px;
                    border: #000000 3px solid;
                }
        
                p {
                    margin: 0pt
                }
                .container{
                  width: 240px;
                  height: 240px;
                }
            </style>
        </head>
        
        <body>
          @foreach ($colis as $item)
              
          <div class="container">

            <table>
              <tr>
                <td>
                  <div>
                    <div style=" margin: 10px; padding: 10px;">
                        <span style="font-weight:bold">Vendeur:</span>
                        <span>{{ $item->client->nomcomplet }}({{ $item->client->telephone }})</span><br>
                        <span style="font-weight:bold">Date:</span>
                        <span>{{ $item->created_at }}</span>
                    </div>
                </div>
                </td>
                <td>
                  <div>
                    <img width="100" src="{{ $img }}" alt="Image">

                </div>
                </td>
              </tr>
                
                
            </table>
            <table cellspacing="0" cellpadding="0"
                style="border:1pt solid #000000; width: 90%; -aw-border:0.5pt single; -aw-border-insideh:0.5pt single #000000; -aw-border-insidev:0.5pt single #000000; border-collapse:collapse ;margin:10px;font-size:14px">
                <tr style="height:15.6pt; -aw-height-rule:exactly">
                    <td
                        style="width:36pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border-bottom:0.5pt single; -aw-border-right:0.5pt single">
                        <p style="font-size:8pt"><span style="font-family:Calibri;font-weight:bold">Destinataire</span></p>
                    </td>
                    <td
                        style="width:105.75pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border-bottom:0.5pt single; -aw-border-left:0.5pt single; -aw-border-right:0.5pt single">
                        <p style="font-size:8pt"><span style="font-family:Calibri">{{ $item->destinataire }}</span></p>
                    </td>
                </tr>
                <tr style="height:18.65pt; -aw-height-rule:exactly">
                    <td
                        style="width:36pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border-bottom:0.5pt single; -aw-border-right:0.5pt single; -aw-border-top:0.5pt single">
                        <p style="font-size:8pt"><span style="font-family:Calibri;font-weight:bold">Telephone</span></p>
                    </td>
                    <td
                        style="width:82.35pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border:0.5pt single">
                        <p style="font-size:8pt"><span style="font-family:Calibri">{{ $item->telepone }}</span></p>
                    </td>
                </tr>
                <tr style="height:18.2pt; -aw-height-rule:exactly">
                    <td
                        style="width:36pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border-bottom:0.5pt single; -aw-border-right:0.5pt single; -aw-border-top:0.5pt single">
                        <p style="font-size:8pt"><span style="font-family:Calibri;font-weight:bold">Adresse</span></p>
                    </td>
                    <td
                        style="width:105.75pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border:0.5pt single">
                        <p style="font-size:8pt"><span style="font-family:Calibri">kkkkkkkk</span></p>
                    </td>
                </tr>
                <tr style="height:18.2pt; -aw-height-rule:exactly">
                    <td
                        style="width:36pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border-bottom:0.5pt single; -aw-border-right:0.5pt single; -aw-border-top:0.5pt single">
                        <p style="font-size:8pt"><span style="font-family:Calibri;font-weight:bold">Ville</span></p>
                    </td>
                    <td
                        style="width:105.75pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border:0.5pt single">
                        <p style="font-size:8pt"><span style="font-family:Calibri">fes</span></p>
                    </td>
                </tr>
                <tr style="height:18.2pt; -aw-height-rule:exactly">
                    <td
                        style="width:36pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border-bottom:0.5pt single; -aw-border-right:0.5pt single; -aw-border-top:0.5pt single">
                        <p style="font-size:8pt"><span style="font-family:Calibri;font-weight:bold">Commentaire</span></p>
                    </td>
                    <td
                        style="width:105.75pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border:0.5pt single">
                        <p style="font-size:8pt"><span style="font-family:Calibri">ccccccccccc</span></p>
                    </td>
                </tr>
                <tr style="height:18.2pt; -aw-height-rule:exactly">
                    <td
                        style="width:36pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border-bottom:0.5pt single; -aw-border-right:0.5pt single; -aw-border-top:0.5pt single">
                        <p style="font-size:8pt"><span style="font-family:Calibri;font-weight:bold">Produit</span></p>
                    </td>
                    <td
                        style="width:105.75pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border:0.5pt single">
                        <p style="font-size:8pt"><span style="font-family:Calibri">llllllllllll</span></p>
                    </td>
                </tr>
                <tr style="height:18.2pt; -aw-height-rule:exactly">
                    <td
                        style="width:36pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border-bottom:0.5pt single; -aw-border-right:0.5pt single; -aw-border-top:0.5pt single">
                        <p style="font-size:8pt"><span style="font-family:Calibri;font-weight:bold">Ouvrir</span></p>
                    </td>
                    <td
                        style="width:105.75pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border:0.5pt single">
                        <p style="font-size:8pt"><span style="font-family:Calibri">non</span></p>
                    </td>
                </tr>
                <tr style="height:18.2pt; -aw-height-rule:exactly">
                    <td
                        style="width:36pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border-bottom:0.5pt single; -aw-border-right:0.5pt single; -aw-border-top:0.5pt single">
                        <p style="font-size:8pt"><span style="font-family:Calibri;font-weight:bold">Crbt :</span></p>
                    </td>
                    <td
                        style="width:105.75pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border:0.5pt single">
                        <p style="font-size:8pt"><span style="font-family:Calibri">632 Dhs</span></p>
                    </td>
                </tr>
            </table> <br>
          </div>
          @endforeach
           
        </body>
        
        </html>
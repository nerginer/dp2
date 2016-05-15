
<form id="proposalForm" action="/proposal/sendForm" method="POST">
 <input type="hidden" name="_token" value="{{ csrf_token() }}">
 <input type="hidden" name="hProposalName" value="">
 <input type="hidden" name="hProposalDescription" value="">


  <font size="1">

 <br> Name:
          <br>
          <div id="proposalName"></div>
          <br> Description:

          <div id="descriptionFinal"></div>

          <br>

<table border="1" width="550" style="table-layout: fixed;">
  <tr>
    <th><center><div class="custom-header"> Sensors</div></center>
        <p><Select disabled multiple style="width:100% ;" name="sensorFinal[]" id="sensorFinal" SIZE=6>
                   
         </select></p>
    </th>
     <th><center><div class="custom-header">Processing</div></center>
        <p><Select disabled multiple style="width:100% ;" name="processingFinal[]" id="processingFinal" SIZE=6>

         </Select></p>
    </th>
     <th><center><div class="custom-header">Communications </div></center>
        <p><SELECT disabled multiple style="width:100% ;" name="communicationsFinal[]" id="communicationsFinal" SIZE=6>

         </SELECT></p>
    </th>
     <th><center><div class="custom-header">User Interface </div></center>
        <p><SELECT disabled multiple style="width:100% ;" name="userInterfaceFinal[]" id="userInterfaceFinal" SIZE=6>

         </SELECT></p>
    </th>
  </tr>
</table> <br>
<table border="1" width="550" style="table-layout: fixed;">
  <tr>


     <th><center><div class="custom-header">Storage </div></center>
        <p><SELECT disabled multiple style="width:100% ;" name="storageFinal[]" id="storageFinal" SIZE=6>

         </SELECT></p>
    </th>
     <th><center><div class="custom-header">Voltage </div></center>
        <p><SELECT disabled multiple style="width:100% ;" name="voltageFinal[]" id="voltageFinal" SIZE=6>

         </SELECT></p>
    </th>
     <th><center><div class="custom-header">Physical</div> </center>
        <p><SELECT disabled multiple style="width:100%;" name="physicalFinal[]" id="physicalFinal" SIZE=6>

         </SELECT></p>
    </th>
  </tr>
</table>

</font>
</form>
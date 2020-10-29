<h2 data-i18n="munki_facts.client_tab"></h2>
  
<div id="munki_facts-msg" data-i18n="listing.loading" class="col-lg-12 text-center"></div>
  
  <div id="munki_facts-view" class="row hide">
    <div class="col-md-7">
      <table id="munki_facts-table" class="table table-striped">
        <tr>
          <th data-i18n="munki_facts.key"></th>
          <th data-i18n="munki_facts.value"></th>
        </tr>
      </table>
    </div>
  </div>

<script>
$(document).on('appReady', function(e, lang) {

  // Get munki_facts data
  $.getJSON( appUrl + '/module/munki_facts/get_data/' + serialNumber, function( data ) {
    if( data.length === 0 ){
      $('#munki_facts-msg').text(i18n.t('munki_facts.not_found'));
      return;
    }

      // Hide
      $('#munki_facts-msg').text('');
      $('#munki_facts-view').removeClass('hide');

    $.each(data, function(i,d){

        $('#munki_facts-table tbody').append(
            $('<tr/>').append(
                $('<th/>').text(d['fact_key']),
                $('<td/>').text(d['fact_value'])
            )
        )
      })
  });
});
  
</script>
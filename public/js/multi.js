$(document).ready(function(){
    var rowcount, addBtn, tableBody, imgPath, basePath;

    addBtn = $("#addNew");
    rowcount = $("#autocomplete_table tbody tr").length+1;
    tableBody = $("#autocomplete_table tbody");
    imgPath = $("#imgPath").val();
    basePath = $("#base_path").val();


    function formHtml() {
        html = '<tr id="row_'+rowcount+'">';
        html += '<th id="delete_'+rowcount+'" scope="row" class="delete_row"><img src="'+imgPath+'" alt=""></th>';
        html += '<td>';
        html += '<input type="text" data-field-name="name" name="Name[]" id="medicineName'+rowcount+'" class="form-control autocomplete_txt" placeholder="Tên thuốc" autocomplete="off" autofocus>';
        html += '<div id="search-ajax">';
        html += '</div>';
        html += '</td>';
        html += '<td>';
        html += '<input type="text" data-field-name="type" name="Type[]" id="type_'+rowcount+'" class="form-control autocomplete_txt" placeholder="Loại thuốc" autocomplete="off" autofocus>';
        html += '</td>';
        html += '<td>';
        html += '<input type="number" min="0" max="10" data-field-name="amount"  name="Amount[]" id="amount_code_'+rowcount+'" class="form-control autocomplete_txt" placeholder="Số lượng" autocomplete="off" autofocus>';
        html += '</td>';
    
        html += '<td>';
        html += '<input type="text" data-field-name="treatment" name="Treatment[]" id="treament_code_'+rowcount+'" class="form-control autocomplete_txt" placeholder="Liều lượng(viên)" autocomplete="off" autofocus>';
        html += '</td>';
        html += '</tr>';
        rowcount++;
        return html;
    }

    function addNewRow() { 
        var html = formHtml();
        console.log(html);
        tableBody.append(html);
    }

    function deleteRow() { 
        // var  rowNo;
        // id = $(this).attr('id');
        // console.log(id);
        // idArr = id.split("_");
        // console.log(idArr);
        // rowNo = idArr[idArr.length - 1];
        // console.log(rowNo);
        // $("#row_"+rowNo).remove();

        console.log($(this).parent());
        $(this).parent().remove();
    }

    function getId(element){
        var id, idArr;
        id = element.attr('id');
        idArr = id.split("_");
        return idArr[idArr.length - 1];
    }

    // function handleAutocomplete() {
    //     var fieldName, currentEle; 
    //     currentEle = $(this);
    //     fieldName = currentEle.data('field-name');

    //     if(typeof fieldName === 'undefined') {
    //         return false;
    //     }

    //     currentEle.autocomplete({
    //         source: function( data, cb ) {	 
    //             console.log(data);
                
    //             $.ajax({
    //                 url: basePath+'/get-countries',
    //                 method: 'GET',
    //                 dataType: 'json',
    //                 data: {
    //                     name:  data.term,
    //                     fieldName: fieldName
    //                 },
    //                 success: function(res){
    //                     var result;
    //                     result = [
    //                         {
    //                             label: 'There is no matching record found for '+data.term,
    //                             value: ''
    //                         }
    //                     ];

    //                     if (res.length) {
    //                         result = $.map(res, function(obj){
                                
    //                             return {
    //                                 label: obj[fieldName],
    //                                 value: obj[fieldName],
    //                                 data : obj
    //                             };
    //                         });
    //                     }
    //                     cb(result);
    //                 }
    //             });
    //         },
    //         autoFocus: true,	      	
    //         minLength: 2,
    //         select: function( event, selectedData ) {
    //             if(selectedData && selectedData.item && selectedData.item.data){
    //                 console.log(selectedData);
    //                 var rowNo, data;
    //                 rowNo = getId(currentEle);
    //                 data = selectedData.item.data;
    //                 $('#medicineName'+rowNo).val(data.name);
    //                 $('#type_'+rowNo).val(data.type);
    //                 $('#amount_code_'+rowNo).val(data.amount);
    //                 $('#treament_code_'+rowNo).val(data.treatment);
    //             }
    //         }		      	
    //     });
    // }

    function registerEvents() {
        addBtn.on("click", addNewRow);
        $(document).on('click', '.delete_row', deleteRow);
        //register autocomplete events
        // $(document).on('focus','.autocomplete_txt', handleAutocomplete);
    }
    registerEvents();

});
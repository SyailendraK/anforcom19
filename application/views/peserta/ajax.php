<script type="text/javascript">
    let valid_nama_tim = false;
    let valid_email_ketua = false;
    let valid_password = false;

    $("input[name='nama_tim']").keyup(function () { 
        var nama_tim = $("input[name='nama_tim']").val();
        $.ajax({
            type: "post",
            url: "<?= base_url('ajax/peserta/check_team_exists')?>",
            data: {nama_tim: nama_tim},
            success: function (response) {
                if(response == true) {
                    $("#bantuan_nama_tim").show();
                    valid_nama_tim = false;
                }else {
                    $("#bantuan_nama_tim").hide()
                    valid_nama_tim = true;
                }
            }
        });
    });

    $("input[name='email_ketua']").keyup(function () { 
        var email_ketua = $("input[name='email_ketua']").val();
        $.ajax({
            type: "post",
            url: "<?= base_url('ajax/peserta/check_email_exists')?>",
            data: {email_ketua: email_ketua},
            success: function (response) {
                if(response == true) {
                    $("#bantuan_email_ketua").show();
                    valid_email_ketua = false;
                }else {
                    $("#bantuan_email_ketua").hide()
                    valid_email_ketua = true;
                }
            }
        });
    });

    $("input[name='verif_pass']").keyup(function () { 
        var password = $("input[name='password']").val();
        var verif_pass = $("input[name='verif_pass']").val();
        if(password != verif_pass) {
            $("#bantuan_password").show();
            valid_password = false;
        }else {
            $("#bantuan_password").hide()
            valid_password = true;
        }
    });

    function validation(){
        if(valid_nama_tim == true && valid_email_ketua == true && valid_password) return true;
        else return false;
    }
</script>

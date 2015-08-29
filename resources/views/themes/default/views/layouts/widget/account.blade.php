<!-- Your Account Block -->
<div class="block">
    <!-- Your Account Title -->
    <div class="block-title">
        <div class="block-options pull-right">
        </div>
        <h2><strong>Tu </strong> Estado</h2>
    </div>
    <!-- END Your Account Title -->

    <!-- Your Account Content -->
    <div class="block-section">
        <table class="table table-borderless table-striped table-vcenter">
            <tbody>
                <tr>
                    <td class="text-right" style="width: 30%;">
                        <img src="{{ Gravatar::src(Auth::user()->email) }}" alt="avatar" class="img-circle">
                    </td>
                    <td>
                        <a href="#"><strong>{{{ Auth::user()->full_name }}} </strong></a>
                    </td>
                </tr>
                <tr>
                    <td class="text-right">Puntos:</td>
                    <td>
                        <strong>{{{ Auth::user()->points }}}</strong>
                    </td>
                </tr>
                <tr>
                    <td class="text-right">Fecha Registro:</td>
                    <td>
                        <strong>{{{ Auth::user()->created_at }}} </strong>
                    </td>
                </tr>
                <tr>
                    <td>Suscripcion: </td>
                    <td>
                        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="8ZVXPSX4Z682Y">
                            <input type="hidden" name="custom" value="{{json_encode(array('user_id' => Auth::user()->id))}}">
                            <input type="image" src="https://www.paypalobjects.com/es_XC/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                            <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
                        </form>
                    </td>
                </tr>
                <!--<tr>
                    <td class="text-right">Cursos</td>
                    <td>
                        <i class="fa fa-plus fa-fw text-info"></i> <a href="javascript:void(0)"><strong>3</strong> New</a><br>
                        <i class="fa fa-heart fa-fw text-danger"></i> <a href="javascript:void(0)"><strong>5</strong> Favorites</a><br>
                        <i class="fa fa-check fa-fw text-success"></i> <a href="javascript:void(0)"><strong>10</strong> Completed</a>
                    </td>-->
                </tr>
            </tbody>
        </table>
    </div>
    <!-- END Your Account Content -->
</div>
<!-- END Your Account Block -->
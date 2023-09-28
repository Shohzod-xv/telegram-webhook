@extends('layouts/app')
@section('content')
    <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex justify-content-top auth px-0">
                <div class="row w-100 mx-0 h-100">
                    <div class="col-lg-6 mx-auto mt-5">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <span style="color: #000000; font-size: 24px;">Telegram-бот <b>Webhook</b> направление</span>
                            <h6 class="font-weight-light">для удобного программиста</h6>
                            <form class="pt-3" method="post" action="{{ route('webhook') }}">
                                @csrf
                                <div class="form-group">
                                    <label class="form-label">Токен тelegram-бота</label>
                                    <input type="text" name="token" class="form-control" placeholder="6473588416:AAFnY1OOxuinIyrZ4IlsYNzTHnhxltfRE0E">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Адрес, по которому находится код бота</label>
                                    <input type="text" name="address" class="form-control" placeholder="https://hostname.uz/folder_name/index.php">
                                </div>
                                <div class="mt-4 font-weight-light">
                                    <input type="submit" style="padding: 1px 5px 1px 5px; margin: 4px; color: #000000; background-color: #eea321; border-radius: 4px; border: none" name="method" value="getUpdates"><span>Don't have an account?</span>
                                </div>
                                <div class="font-weight-light">
                                    <input type="submit" style="padding: 1px 5px 1px 5px; margin: 4px; color: #000000; background-color: #1aef1e; border-radius: 4px; border: none" name="method" value="setWebhook"><span>Don't have an account?</span>
                                </div>
                                <div class="font-weight-light">
                                    <input type="submit" style="padding: 1px 5px 1px 5px; margin: 4px; color: #ffffff; background-color: #1069e6; border-radius: 4px; border: none" name="method" value="getMe"><span>Don't have an account?</span>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 mx-auto mt-5">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <span style="color: #000000; font-size: 24px; margin-bottom: 10px">Telegram-бот <b>Ответ вернулся на запрос</b></span>
                            @php
                            if(isset($results)){
                                 $data = json_decode($results, true);
                             }
                             @endphp
                             <pre class="m-3 text-danger"> {{ json_encode($data, JSON_PRETTY_PRINT) }} </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
@endsection


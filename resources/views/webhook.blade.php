@extends('layouts/app')
@section('content')
    <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex justify-content-top auth px-0">
                <div class="row w-100 mx-0 h-100">
                    <div class="col-lg-6 mx-auto mt-5">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <span style="color: #000000; font-size: 24px;">Telegram-бот <b>Webhook</b></span>
                            <form class="pt-3" method="post" action="{{ route('webhook') }}">
                                @csrf
                                <div class="form-group">
                                    <label class="form-label">Токен тelegram-бота</label>
                                    <input type="text" name="token" class="form-control" placeholder="6473588416:AAFnY1OOxuinIyrZ4IlsYNzTHnhxltfRE0E">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">веб-адрес</label>
                                    <input type="text" name="address" class="form-control" placeholder="https://hostname.uz/folder_name/index.php">
                                </div>
                                <div class="font-weight-light">
                                    <input type="submit" style="padding: 1px 5px 1px 5px; margin: 4px; color: #ffffff; background-color: #02ed05; border-radius: 4px; border: none" name="method" value="setWebhook"><span style="font-size: 13px;">Включить webhook</span>
                                </div>
                                <div class="font-weight-light">
                                    <input type="submit" style="padding: 1px 5px 1px 5px; margin: 4px; color: #ffffff; background-color: #f80a0a; border-radius: 4px; border: none" name="method" value="deleteWebhook"><span style="font-size: 13px;">Отключить webhook</span>
                                </div>
                                <div class="font-weight-light">
                                    <input type="submit" style="padding: 1px 5px 1px 5px; margin: 4px; color: #ffffff; background-color: #eea321; border-radius: 4px; border: none;" name="method" value="getUpdates"><span style="font-size: 13px;">Получайте последние обновления</span>
                                </div>
                                <div class="font-weight-light">
                                    <input type="submit" style="padding: 1px 5px 1px 5px; margin: 4px; color: #ffffff; background-color: #01a7ff; border-radius: 4px; border: none" name="method" value="getMe"><span style="font-size: 13px;">Полная информация о боте</span>
                                </div>
                                <div class="font-weight-light">
                                    <input type="submit" style="padding: 1px 5px 1px 5px; margin: 4px; color: #030303; background-color: rgba(115,115,118,0.44); border-radius: 4px; border: none" name="method" value="DropPendingUpdates"><span style="font-size: 13px;">Удалить ожидающий запрос</span>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 mx-auto mt-5">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <span style="color: #000000; font-size: 24px;"><b>Ответ</b> на запрос</span>
                            @php
                            if(isset($results)){
                                 $data = json_decode($results, true);
                             @endphp
                             <pre class="m-3 text-danger"><?php echo json_encode($data, JSON_PRETTY_PRINT); } ?> </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
@endsection


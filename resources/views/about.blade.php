@extends('layouts.app')
@section('css')
    <style>
        .tab-content {
            border: 1px solid #ddd;
            border-top: none;
            padding: 50px;
            border-radius: 0 0 5px 5px;
        }
        #b > img {
            box-shadow: 1px 1px 12px;
            margin-bottom: 10px;
        }
    </style>
@endsection
@section('content')
    <div id="content">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="/">首页</a></li>
                <li>关于我们</li>
            </ol>
            <div class="divider"></div>
        </div>
        <div class="container">
            <ul class="nav nav-tabs">
                <li  class="active"><a href="#a" data-toggle="tab">公司介绍</a></li>
                <li><a href="#b" data-toggle="tab">公司资质</a></li>
            </ul>
            <ul class="tab-content">
                <li id="a" class="tab-pane active"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;江苏宜宝设备制造有限公司成立于2015年，总投资1500万，主要从事节能设备—板式换热器以及换热机组，蒸发冷凝设备及其系统的生产、研发、制造、销售、安装服务的企业，致力于高效传热节能技术创新，提供蒸发浓缩结晶分离整体解决方案。现有员工60多人，其中专业技术人员10人，专业研发人员5人，厂区面积5000平方，年生产能力换热器5000台，系统集成300套。企业通过国际质量 ISO9001-：2000认证，产品遵照国际生产，同时满足如ASME，JIS，CE-PED等各国标准和规范。 江苏宜宝制造有限公司凭借数年来对研发工作持续不断的投入和遍布国内多套已安装运行的蒸发装置的成功经验，为客户提供最广泛的专门技术和最佳解决方案。在食品、医药、生物、环保、化工等诸多领域拥有众多客户。</li>
                <li id="b" class="tab-pane">
                    <img class="img-responsive center-block " src="{{ asset('pc/image/z1.png') }}">
                    <img class="img-responsive center-block " src="{{ asset('pc/image/z2.jpg') }}">
                </li>
            </ul>
        </div>
    </div>
@endsection


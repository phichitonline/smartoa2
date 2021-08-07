@extends('layouts.theme')
@section('menu-active-vac','active-nav')
@section('header_script')
{{-- header --}}
@endsection

@section('content')

<div class="page-content header-clear-small">

@foreach ($visit_header as $data)
@php
    $app_cause = str_replace("\r\n"," ",$data->note)." ".str_replace("\r\n"," ",$data->app_cause);
    $nextdate = DateThaiFull($data->nextdate);
    $nexttime = " เวลา ".substr($data->nexttime,0,5)." - ".substr($data->endtime,0,5)." น.";
    $nexttime1 = substr($data->nexttime,0,5);
    $notetext = str_replace("\r\n"," ",$data->note)." ".str_replace("\r\n"," ",$data->note1);
    $ptname = $data->pname.$data->fname." ".$data->lname;
    $note = str_replace("\r\n"," ",$data->note);
    $note1 = str_replace("\r\n"," ",$data->note1);
    $contact_point = str_replace("\r\n"," ",$data->contact_point);
    $lab_list_text = str_replace("\r\n"," ",$data->lab_list_text);
    $xray_list_text = str_replace("\r\n"," ",$data->xray_list_text);

    echo "เตือนนัด : ".$data->hn." - ".$data->pname.$data->fname." ".$data->lname." (".$data->app_cause.")";

    // ********** ส่งข้อมูลนัดใน Line Official *********** //
    $pushID = $data->line_id;
    $access_token = config('line-bot.channel_access_token');
    $curl = curl_init();
    curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.line.me/v2/bot/message/push",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS =>'{

        "to": "'.$pushID.'",
        "messages": [{
        "type": "flex",
        "altText": "'.$moduletitle.'",
        "contents": {

            "type": "bubble",
            "size": "mega",
            "hero": {
            "type": "image",
            "url": "'.$picture_url.'",
            "size": "full",
            "aspectRatio": "1040:384",
            "aspectMode": "cover",
            "action": {
            "type": "uri",
            "uri": "https://liff.line.me/1654103357-zl6xB06Y"
            }
            },
            "body": {
            "type": "box",
            "layout": "vertical",
            "contents": [
            {
            "type": "box",
            "layout": "vertical",
            "contents": [
            {
                "type": "text",
                "text": "'.$ptname.' ",
                "margin": "none",
                "size": "lg",
                "weight": "bold"
            },
            {
                "type": "text",
                "text": "'.$moduletitle.'",
                "color": "'.$fotter_color.'",
                "margin": "md",
                "weight": "bold",
                "size": "lg"
            },
            {
                "type": "text",
                "text": "'.$nextdate.$nexttime.' ",
                "margin": "none",
                "size": "sm",
                "color": "'.$fotter_color.'",
                "wrap": true
            },
            {
                "type": "text",
                "text": "'.$app_cause.' ",
                "weight": "bold",
                "color": "#1f76de",
                "size": "lg",
                "margin": "md",
                "wrap": true
            }
            ]
            },
            {
            "type": "text",
            "text": "ขั้นตอนการรับบริการ",
            "color": "#b7b7b7",
            "size": "xs",
            "margin": "lg"
            },
            {
            "type": "box",
            "layout": "horizontal",
            "contents": [
            {
                "type": "text",
                "text": "'.$nexttime1.' ",
                "size": "sm",
                "gravity": "center"
            },
            {
                "type": "box",
                "layout": "vertical",
                "contents": [
                {
                    "type": "filler"
                },
                {
                    "type": "box",
                    "layout": "vertical",
                    "contents": [],
                    "cornerRadius": "30px",
                    "height": "12px",
                    "width": "12px",
                    "borderColor": "#EF454D",
                    "borderWidth": "2px"
                },
                {
                    "type": "filler"
                }
                ],
                "flex": 0
            },
            {
                "type": "text",
                "text": "ยื่นใบนัดรอซักประวัติ",
                "gravity": "center",
                "flex": 4,
                "size": "sm"
            }
            ],
            "spacing": "lg",
            "cornerRadius": "30px",
            "margin": "md"
            },
            {
            "type": "box",
            "layout": "horizontal",
            "contents": [
            {
                "type": "box",
                "layout": "baseline",
                "contents": [
                {
                    "type": "filler"
                }
                ],
                "flex": 1
            },
            {
                "type": "box",
                "layout": "vertical",
                "contents": [
                {
                    "type": "box",
                    "layout": "horizontal",
                    "contents": [
                    {
                        "type": "filler"
                    },
                    {
                        "type": "box",
                        "layout": "vertical",
                        "contents": [],
                        "width": "2px",
                        "backgroundColor": "#B7B7B7"
                    },
                    {
                        "type": "filler"
                    }
                    ],
                    "flex": 1
                }
                ],
                "width": "12px"
            },
            {
                "type": "text",
                "text": "('.$contact_point.')",
                "gravity": "center",
                "flex": 4,
                "size": "xs",
                "color": "#8c8c8c"
            }
            ],
            "spacing": "lg",
            "height": "30px"
            },
            {
            "type": "box",
            "layout": "horizontal",
            "contents": [
            {
                "type": "text",
                "text": " ",
                "size": "sm",
                "gravity": "center"
            },
            {
                "type": "box",
                "layout": "vertical",
                "contents": [
                {
                    "type": "filler"
                },
                {
                    "type": "box",
                    "layout": "vertical",
                    "contents": [],
                    "cornerRadius": "30px",
                    "height": "12px",
                    "width": "12px",
                    "borderColor": "#F39C12",
                    "borderWidth": "2px"
                },
                {
                    "type": "filler"
                }
                ],
                "flex": 0
            },
            {
                "type": "text",
                "text": "X-Ray",
                "gravity": "center",
                "flex": 4,
                "size": "sm"
            }
            ],
            "spacing": "lg",
            "cornerRadius": "30px",
            "margin": "sm"
            },
            {
            "type": "box",
            "layout": "horizontal",
            "contents": [
            {
                "type": "box",
                "layout": "baseline",
                "contents": [
                {
                    "type": "filler"
                }
                ],
                "flex": 1
            },
            {
                "type": "box",
                "layout": "vertical",
                "contents": [
                {
                    "type": "box",
                    "layout": "horizontal",
                    "contents": [
                    {
                        "type": "filler"
                    },
                    {
                        "type": "box",
                        "layout": "vertical",
                        "contents": [],
                        "width": "2px",
                        "backgroundColor": "#B7B7B7"
                    },
                    {
                        "type": "filler"
                    }
                    ],
                    "flex": 1
                }
                ],
                "width": "12px"
            },
            {
                "type": "text",
                "text": "('.$xray_list_text.')",
                "gravity": "center",
                "flex": 4,
                "size": "xs",
                "color": "#8c8c8c"
            }
            ],
            "spacing": "lg",
            "height": "30px"
            },
            {
            "type": "box",
            "layout": "horizontal",
            "contents": [
            {
                "type": "box",
                "layout": "horizontal",
                "contents": [],
                "flex": 1
            },
            {
                "type": "box",
                "layout": "vertical",
                "contents": [
                {
                    "type": "filler"
                },
                {
                    "type": "box",
                    "layout": "vertical",
                    "contents": [],
                    "cornerRadius": "30px",
                    "width": "12px",
                    "height": "12px",
                    "borderColor": "#6486E3",
                    "borderWidth": "2px"
                },
                {
                    "type": "filler"
                }
                ],
                "flex": 0
            },
            {
                "type": "text",
                "text": "รอตรวจ",
                "gravity": "center",
                "flex": 4,
                "size": "sm"
            }
            ],
            "spacing": "lg",
            "cornerRadius": "30px"
            },
            {
            "type": "separator",
            "margin": "md"
            },
            {
            "type": "text",
            "text": "'.$note1.' ",
            "margin": "md",
            "size": "sm",
            "wrap": true
            }
            ]
            },
            "footer": {
            "type": "box",
            "layout": "vertical",
            "contents": [
            {
            "type": "text",
            "text": "รายละเอียดเพิ่มเติม",
            "align": "center",
            "color": "#FFFFFF",
            "action": {
            "type": "uri",
            "label": "action",
            "uri": "https://liff.line.me/1654103357-zl6xB06Y"
            }
            }
            ],
            "backgroundColor": "'.$fotter_color.'"
            }


        }
        }]
    }',

    CURLOPT_HTTPHEADER => array(
        "Authorization: Bearer ".$access_token."",
        "Content-Type: application/json"
    ),

    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;
    // ********************************************** //

@endphp
<br>
@endforeach

</div>
<!-- End of Page Content-->

@endsection

@section('footer_script')

@endsection

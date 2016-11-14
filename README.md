### About Di-Help

[Di-Help]  is a tool for PM & QA.

### Function List
  - 門店
  >find out store full category level
  >e.g.,ablejeans^加盟^北区加盟^购物中心^TJ01SH19
  - 會員查詢
  >find out member profile and data loss rate
  - 指標
  >Double confirm with DI Index

### Server Requirement
Nginx + PHP(5.6)

### Installation
- Set Nginx root path to

>\<di-help>\public

- Copy

>\<di-help>\.env.example

to

>\<di-help>\.env

### Configuration


Mongo ip setting in .env：

```sh
DB_CN1=10.10.21.71
DB_CN2=10.10.21.72
DB_CN_DATABASE=ProjectReport_StarterDIY
DB_CN_USERNAME=
DB_CN_PASSWORD=
DB_CN_replicaSetName=rs0

DB_TW1=10.1.4.47
DB_TW2=10.1.4.48
DB_TW_DATABASE=ProjectReport_StarterDIY
DB_TW_USERNAME=
DB_TW_PASSWORD=
DB_CN_replicaSetName=rs0

DB_CN_Store1=10.10.21.71
DB_CN_Store2=10.10.21.72
DB_CN_DATABASE=ProjectReport_StarterDI
DB_CN_Store_DATABASE=ProjectBasicInfo
DB_CN_Store_USERNAME=
DB_CN_Store_PASSWORD=
DB_CN_Store_replicaSetName=rs0

DB_TW_Store1=10.1.4.47
DB_TW_Store2=10.1.4.48
DB_TW_Store_DATABASE=ProjectBasicInfo
DB_TW_Store_USERNAME=
DB_TW_Store_PASSWORD=
DB_TW_Store_replicaSetName=rs0
```

###Route
>\<di-help>\app\Http\routes.php

###Controller
  - 門店

>\<di-help>\app\Http\Controllers\StoreController.php

  - 會員查詢

>\<di-help>\app\Http\Controllers\MemberController.php

  - 指標

>\<di-help>\app\Http\Controllers\DIYReportController.php

###View
- 門店

>\<di-help>\resources\views\store.blade.php

- 會員查詢

>\<di-help>\resources\views\member.blade.php

- 指標

>\<di-help>\resources\views\diy.blade.php


[di-help]: <http://10.0.3.163/diy>

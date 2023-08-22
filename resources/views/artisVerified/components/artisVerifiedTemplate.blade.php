<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="/cssArtisVerified/vendors/mdi/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/cssArtisVerified/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        .datakiri {
            position: relative;
            overflow-y: scroll;
            height: 68vh;
        }

        .datakanan {
            position: relative;
            overflow-y: scroll;
            height: 40vh;
        }

        .scrollbar-dusty-grass::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
            border-radius: 10px;
        }

        .scrollbar-dusty-grass::-webkit-scrollbar {
            width: 12px;
            background-color: #f5f5f5;
        }

        .scrollbar-dusty-grass::-webkit-scrollbar-thumb {
            border-radius: 10px;
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
            background-color: #957dad;
        }

        .thin::-webkit-scrollbar {
            width: 6px;
        }

        .bottom-left {
            position: absolute;
            bottom: 8px;
            left: 16px;
        }

        .bottom-right {
            position: absolute;
            bottom: 8px;
            right: 16px;
        }
    </style>
</head>

<body>
    <div class="container-scroller">

        <nav class="sidebar sidebar-offcanvas" id="sidebar"
            style="
          z-index: 100;
          box-shadow: rgba(17, 17, 26, 0.1) 0px 8px 24px,
            rgba(17, 17, 26, 0.1) 0px 16px 56px,
            rgba(17, 17, 26, 0.1) 0px 24px 80px;
        ">
            <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
                <a class="sidebar-brand brand-logo" href="/artis-verified/dashboard"><svg width="150" height="35"
                        viewBox="0 0 215 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M79.5918 29H74.7041V11.5C74.7041 11.1582 74.6357 10.8392 74.499 10.543C74.3737 10.2467 74.1971 9.9904 73.9692 9.77393C73.7528 9.54606 73.4964 9.36947 73.2002 9.24414C72.904 9.11882 72.585 9.05615 72.2432 9.05615C71.9014 9.05615 71.5824 9.11882 71.2861 9.24414C70.9899 9.36947 70.7279 9.54606 70.5 9.77393C70.2835 9.9904 70.1126 10.2467 69.9873 10.543C69.862 10.8392 69.7993 11.1582 69.7993 11.5V29H64.8945V11.5C64.8945 11.1582 64.8319 10.8392 64.7065 10.543C64.5812 10.2467 64.4046 9.9904 64.1768 9.77393C63.9603 9.54606 63.7039 9.36947 63.4077 9.24414C63.1115 9.11882 62.7925 9.05615 62.4507 9.05615C62.1089 9.05615 61.7899 9.11882 61.4937 9.24414C61.1974 9.36947 60.9354 9.54606 60.7075 9.77393C60.491 9.9904 60.3201 10.2467 60.1948 10.543C60.0695 10.8392 60.0068 11.1582 60.0068 11.5V29H55.1021V11.5C55.1021 10.486 55.29 9.53467 55.666 8.646C56.0534 7.74593 56.5775 6.96549 57.2383 6.30469C57.9105 5.63249 58.6909 5.1084 59.5796 4.73242C60.4797 4.34505 61.4367 4.15137 62.4507 4.15137C63.3621 4.15137 64.2394 4.31657 65.0825 4.64697C65.9256 4.96598 66.6833 5.43311 67.3555 6.04834C68.0277 5.43311 68.7796 4.96598 69.6113 4.64697C70.4544 4.31657 71.3317 4.15137 72.2432 4.15137C73.2572 4.15137 74.2085 4.34505 75.0972 4.73242C75.9972 5.1084 76.7777 5.63249 77.4385 6.30469C78.1107 6.96549 78.6348 7.74593 79.0107 8.646C79.3981 9.53467 79.5918 10.486 79.5918 11.5V29ZM97.7829 26.8638C97.4069 27.2056 97.0025 27.5303 96.5695 27.8379C96.148 28.1341 95.7036 28.3962 95.2365 28.624C94.7694 28.8405 94.2852 29.0114 93.7839 29.1367C93.294 29.2734 92.7927 29.3418 92.28 29.3418C91.1521 29.3418 90.0925 29.1424 89.1013 28.7437C88.1101 28.3449 87.2385 27.7809 86.4865 27.0518C85.746 26.3112 85.1592 25.4168 84.7263 24.3687C84.3047 23.3091 84.0939 22.1242 84.0939 20.814V10.6968H88.7424V20.814C88.7424 21.4292 88.8335 21.9818 89.0158 22.4717C89.2095 22.9502 89.4659 23.3547 89.7849 23.6851C90.1039 24.0155 90.4742 24.2661 90.8957 24.437C91.3286 24.6079 91.7901 24.6934 92.28 24.6934C92.7585 24.6934 93.2085 24.5851 93.6301 24.3687C94.063 24.1408 94.439 23.8446 94.758 23.48C95.077 23.1154 95.3277 22.7052 95.51 22.2495C95.6923 21.7824 95.7834 21.3039 95.7834 20.814V10.6968H100.449V29H99.321L97.7829 26.8638ZM115.12 29H104.455V24.3516H115.12C115.439 24.3516 115.712 24.2376 115.94 24.0098C116.168 23.7819 116.282 23.5085 116.282 23.1895C116.282 22.859 116.168 22.6426 115.94 22.54C115.712 22.4375 115.439 22.3862 115.12 22.3862H110.266C109.457 22.3862 108.699 22.2324 107.993 21.9248C107.287 21.6172 106.671 21.2013 106.147 20.6772C105.623 20.1418 105.207 19.5208 104.9 18.8145C104.604 18.1081 104.455 17.3504 104.455 16.5415C104.455 15.7326 104.604 14.9749 104.9 14.2686C105.207 13.5622 105.623 12.9469 106.147 12.4229C106.671 11.8988 107.287 11.4886 107.993 11.1924C108.699 10.8848 109.457 10.731 110.266 10.731H119.717V15.3794H110.266C109.947 15.3794 109.674 15.4933 109.446 15.7212C109.218 15.9491 109.104 16.2225 109.104 16.5415C109.104 16.8719 109.218 17.1567 109.446 17.396C109.674 17.6239 109.947 17.7378 110.266 17.7378H115.12C115.917 17.7378 116.669 17.8745 117.375 18.1479C118.082 18.41 118.697 18.7803 119.221 19.2588C119.745 19.7373 120.161 20.3127 120.469 20.9849C120.776 21.6571 120.93 22.3919 120.93 23.1895C120.93 23.9984 120.776 24.756 120.469 25.4624C120.161 26.1574 119.745 26.7726 119.221 27.3081C118.697 27.8322 118.082 28.248 117.375 28.5557C116.669 28.8519 115.917 29 115.12 29ZM129.978 5.72363C129.978 6.15658 129.893 6.56104 129.722 6.93701C129.562 7.31299 129.34 7.64339 129.055 7.92822C128.77 8.20166 128.434 8.42383 128.047 8.59473C127.671 8.75423 127.267 8.83398 126.834 8.83398C126.401 8.83398 125.99 8.75423 125.603 8.59473C125.227 8.42383 124.897 8.20166 124.612 7.92822C124.338 7.64339 124.116 7.31299 123.945 6.93701C123.786 6.56104 123.706 6.15658 123.706 5.72363C123.706 5.30208 123.786 4.90332 123.945 4.52734C124.116 4.13997 124.338 3.80957 124.612 3.53613C124.897 3.2513 125.227 3.02913 125.603 2.86963C125.99 2.69873 126.401 2.61328 126.834 2.61328C127.267 2.61328 127.671 2.69873 128.047 2.86963C128.434 3.02913 128.77 3.2513 129.055 3.53613C129.34 3.80957 129.562 4.13997 129.722 4.52734C129.893 4.90332 129.978 5.30208 129.978 5.72363ZM129.175 29H124.475V10.6968H129.175V29ZM153.86 26.4878C152.721 27.4676 151.445 28.2196 150.032 28.7437C148.619 29.2677 147.155 29.5298 145.64 29.5298C144.478 29.5298 143.356 29.376 142.273 29.0684C141.202 28.7721 140.194 28.3506 139.248 27.8037C138.314 27.2454 137.46 26.5789 136.685 25.8042C135.91 25.0295 135.244 24.175 134.685 23.2407C134.138 22.2951 133.711 21.2868 133.404 20.2158C133.107 19.1335 132.959 18.0112 132.959 16.8491C132.959 15.687 133.107 14.5648 133.404 13.4824C133.711 12.4001 134.138 11.3918 134.685 10.4575C135.244 9.51188 135.91 8.65169 136.685 7.87695C137.46 7.10221 138.314 6.44141 139.248 5.89453C140.194 5.33626 141.202 4.90902 142.273 4.61279C143.356 4.30518 144.478 4.15137 145.64 4.15137C147.155 4.15137 148.619 4.41341 150.032 4.9375C151.445 5.4502 152.721 6.20215 153.86 7.19336L151.262 11.4658C150.545 10.6911 149.696 10.0986 148.716 9.68848C147.736 9.26693 146.711 9.05615 145.64 9.05615C144.558 9.05615 143.544 9.26123 142.598 9.67139C141.652 10.0815 140.826 10.6398 140.12 11.3462C139.414 12.0412 138.855 12.8672 138.445 13.8242C138.035 14.7699 137.83 15.7782 137.83 16.8491C137.83 17.9201 138.035 18.9284 138.445 19.874C138.855 20.8083 139.414 21.6286 140.12 22.335C140.826 23.0413 141.652 23.5996 142.598 24.0098C143.544 24.4199 144.558 24.625 145.64 24.625C146.711 24.625 147.736 24.4199 148.716 24.0098C149.696 23.5882 150.545 22.9901 151.262 22.2153L153.86 26.4878ZM174.341 29H173.213L171.402 26.4878C170.958 26.8866 170.485 27.2625 169.983 27.6157C169.493 27.9575 168.975 28.2594 168.428 28.5215C167.881 28.7721 167.317 28.9715 166.736 29.1196C166.167 29.2677 165.586 29.3418 164.993 29.3418C163.706 29.3418 162.492 29.1253 161.353 28.6924C160.225 28.2594 159.234 27.6328 158.379 26.8125C157.536 25.9808 156.87 24.9668 156.38 23.7705C155.89 22.5742 155.645 21.2127 155.645 19.686C155.645 18.2619 155.89 16.9574 156.38 15.7725C156.87 14.5762 157.536 13.5508 158.379 12.6963C159.234 11.8418 160.225 11.181 161.353 10.7139C162.492 10.2354 163.706 9.99609 164.993 9.99609C165.586 9.99609 166.172 10.0701 166.753 10.2183C167.334 10.3664 167.898 10.5715 168.445 10.8335C168.992 11.0955 169.511 11.4032 170 11.7563C170.502 12.1095 170.969 12.4912 171.402 12.9014L173.213 10.731H174.341V29ZM169.642 19.686C169.642 19.048 169.516 18.4328 169.266 17.8403C169.026 17.2365 168.696 16.7067 168.274 16.251C167.853 15.7839 167.357 15.4136 166.788 15.1401C166.229 14.8553 165.631 14.7129 164.993 14.7129C164.355 14.7129 163.751 14.8211 163.182 15.0376C162.623 15.2541 162.133 15.5731 161.712 15.9946C161.302 16.4162 160.977 16.9403 160.738 17.5669C160.499 18.1821 160.379 18.8885 160.379 19.686C160.379 20.4836 160.499 21.1956 160.738 21.8223C160.977 22.4375 161.302 22.9559 161.712 23.3774C162.133 23.799 162.623 24.118 163.182 24.3345C163.751 24.5509 164.355 24.6592 164.993 24.6592C165.631 24.6592 166.229 24.5225 166.788 24.249C167.357 23.9642 167.853 23.5939 168.274 23.1382C168.696 22.6711 169.026 22.1413 169.266 21.5488C169.516 20.945 169.642 20.3241 169.642 19.686ZM184.158 29L177.186 10.6968H182.501L186.5 22.1128L190.482 10.6968H195.814L188.841 29H184.158ZM205.374 24.5225C205.557 24.5794 205.739 24.6193 205.921 24.6421C206.104 24.6535 206.286 24.6592 206.468 24.6592C206.924 24.6592 207.363 24.5965 207.784 24.4712C208.206 24.3459 208.599 24.1693 208.963 23.9414C209.339 23.7021 209.67 23.4173 209.954 23.0869C210.251 22.7451 210.49 22.3691 210.672 21.959L214.09 25.394C213.657 26.0093 213.156 26.5618 212.586 27.0518C212.028 27.5417 211.419 27.9575 210.758 28.2993C210.108 28.6411 209.419 28.8975 208.69 29.0684C207.972 29.2507 207.232 29.3418 206.468 29.3418C205.181 29.3418 203.967 29.1025 202.828 28.624C201.7 28.1455 200.709 27.479 199.854 26.6245C199.011 25.77 198.345 24.756 197.855 23.5825C197.365 22.3976 197.12 21.0988 197.12 19.686C197.12 18.2391 197.365 16.9175 197.855 15.7212C198.345 14.5249 199.011 13.5052 199.854 12.6621C200.709 11.819 201.7 11.1639 202.828 10.6968C203.967 10.2297 205.181 9.99609 206.468 9.99609C207.232 9.99609 207.978 10.0872 208.707 10.2695C209.436 10.4518 210.125 10.7139 210.775 11.0557C211.436 11.3975 212.051 11.819 212.621 12.3203C213.19 12.8102 213.691 13.3628 214.124 13.978L205.374 24.5225ZM207.767 14.9009C207.551 14.8211 207.334 14.7699 207.118 14.7471C206.913 14.7243 206.696 14.7129 206.468 14.7129C205.83 14.7129 205.226 14.8325 204.657 15.0718C204.098 15.2996 203.608 15.63 203.187 16.063C202.777 16.4959 202.452 17.02 202.213 17.6353C201.974 18.2391 201.854 18.9227 201.854 19.686C201.854 19.8569 201.86 20.0506 201.871 20.2671C201.894 20.4836 201.922 20.7057 201.956 20.9336C202.002 21.1501 202.053 21.3608 202.11 21.5659C202.167 21.771 202.241 21.9533 202.332 22.1128L207.767 14.9009Z"
                            fill="#957DAD" />
                        <path
                            d="M6.17295 7.60842L6.17392 7.60842C7.3737 7.60842 8.37175 8.52894 8.37175 9.69498C8.37175 11.1897 7.39721 12.1706 6.47646 12.7623C6.01315 13.0601 5.55177 13.2676 5.20729 13.4006C5.03465 13.4673 4.89035 13.5156 4.78849 13.5475C4.73754 13.5635 4.69713 13.5753 4.66902 13.5833L4.63629 13.5924L4.62723 13.5948L4.6246 13.5955L4.62377 13.5957L4.62348 13.5958C4.62337 13.5958 4.62327 13.5958 4.56084 13.3537M6.17295 7.60842L2.9478 7.61915C1.7524 7.61912 0.75747 8.5328 0.750005 9.69279H0.75V9.6944C0.75 11.1891 1.7245 12.1702 2.64523 12.762C3.10853 13.0599 3.56989 13.2675 3.91437 13.4005C4.08701 13.4672 4.2313 13.5156 4.33316 13.5475C4.38411 13.5634 4.42451 13.5753 4.45262 13.5832L4.48536 13.5923L4.49441 13.5948L4.49704 13.5955L4.49787 13.5957L4.49816 13.5957C4.49828 13.5958 4.49838 13.5958 4.56084 13.3537M6.17295 7.60842C5.53618 7.61087 4.96035 7.8706 4.55893 8.28751M6.17295 7.60842L4.55893 8.28751M4.56084 13.3537L4.62327 13.5958L4.56082 13.6119L4.49838 13.5958L4.56084 13.3537ZM4.55893 8.28751C4.1539 7.87356 3.58073 7.61915 2.94781 7.61915L4.55893 8.28751ZM11.1957 19.71C11.2601 19.9515 11.2602 19.9515 11.2603 19.9515L11.2605 19.9514L11.2613 19.9512L11.2635 19.9506L11.2711 19.9485L11.2984 19.9407C11.3216 19.9339 11.355 19.9239 11.3969 19.9104C11.4808 19.8835 11.5995 19.8428 11.7413 19.787C12.0242 19.6758 12.4035 19.5028 12.7847 19.2563C13.5389 18.7685 14.3491 17.9585 14.3522 16.7326C14.3535 16.7074 14.3542 16.6798 14.3542 16.6526C14.3542 15.7084 13.5469 14.9678 12.5824 14.9678C12.5609 14.9678 12.5396 14.9682 12.5186 14.9689C12.508 14.9687 12.4969 14.9686 12.4863 14.9686C12.0109 14.9686 11.5763 15.1471 11.2564 15.4406C10.9418 14.9436 10.3748 14.6205 9.73482 14.6205C8.76794 14.6205 7.9587 15.363 7.9587 16.3094C7.9587 16.4671 7.98151 16.62 8.02419 16.7652C8.04129 17.9871 8.84756 18.7873 9.60026 19.2678C9.9837 19.5126 10.3652 19.6829 10.6497 19.7919C10.7924 19.8465 10.9117 19.8861 10.9961 19.9123C11.0383 19.9254 11.0718 19.9351 11.0952 19.9417L11.1226 19.9492L11.1303 19.9513L11.1326 19.9519L11.1333 19.9521L11.1336 19.9521C11.1337 19.9522 11.1338 19.9522 11.1957 19.71ZM11.1957 19.71L11.2601 19.9515L11.197 19.9683L11.1338 19.9522L11.1957 19.71ZM11.9109 4.37183C11.9727 4.61406 11.9728 4.61403 11.9729 4.61401L11.9732 4.61394L11.9738 4.61378L11.9757 4.61328L11.9818 4.61166L12.0031 4.6058C12.0212 4.60072 12.0469 4.59324 12.0792 4.58323C12.1436 4.56322 12.2344 4.53298 12.3429 4.49131C12.5591 4.40828 12.8493 4.27831 13.1416 4.09081C13.7204 3.71938 14.3522 3.08992 14.3522 2.11915C14.3522 1.3493 13.6947 0.75 12.9152 0.75H12.9093C12.5249 0.75 12.1726 0.892729 11.9111 1.12854C11.6513 0.893252 11.3026 0.751708 10.9217 0.751708C10.143 0.751708 9.48602 1.34983 9.48479 2.11862V2.11902C9.48479 3.08895 10.1118 3.71847 10.6871 4.0903C10.9775 4.27793 11.2659 4.40798 11.4807 4.49108C11.5884 4.53278 11.6787 4.56304 11.7427 4.58307C11.7748 4.5931 11.8003 4.60058 11.8183 4.60567L11.8395 4.61154L11.8456 4.61317L11.8475 4.61367L11.8482 4.61383L11.8484 4.6139C11.8485 4.61392 11.8486 4.61395 11.9109 4.37183ZM11.9109 4.37183L11.9727 4.61406L11.9106 4.62991L11.8486 4.61395L11.9109 4.37183ZM12.6413 22.6452H12.641C9.26641 22.6486 6.50576 25.2308 6.50217 28.4476V28.4479C6.50217 31.6663 9.26481 34.2506 12.6413 34.2506C15.9299 34.2506 18.6362 31.7992 18.7748 28.6979H18.7804V28.4479V14.6718L32.7065 11.3892V19.0704C31.9171 18.7217 31.037 18.5273 30.1108 18.5273H30.1106C26.736 18.5306 23.9753 21.1129 23.9717 24.3297V24.3299C23.9717 27.5484 26.7344 30.1327 30.1108 30.1327C33.3995 30.1327 36.1058 27.6812 36.2444 24.58H36.25V24.33V1.90249V1.58669L35.9426 1.65916L15.4296 6.49591L15.237 6.54133V6.73924V23.1883C14.4475 22.8396 13.5675 22.6452 12.6413 22.6452ZM32.7065 5.8942V7.9176L18.7804 11.2003V9.17694L32.7065 5.8942ZM15.237 28.4479C15.237 29.7779 14.089 30.8809 12.6415 30.881C11.1946 30.8795 10.0472 29.7773 10.0457 28.4476C10.0458 27.1176 11.1938 26.0148 12.6413 26.0148C14.0889 26.0148 15.237 27.1178 15.237 28.4479ZM32.7065 24.33C32.7065 25.66 31.5586 26.7629 30.1111 26.7631C28.6642 26.7616 27.5167 25.6594 27.5152 24.3297C27.5154 22.9997 28.6634 21.8969 30.1108 21.8969C31.5585 21.8969 32.7065 22.9999 32.7065 24.33Z"
                            fill="#957DAD" stroke="#957DAD" stroke-width="0.5" />
                    </svg>
                </a>
            </div>
            <ul class="nav">
                <li class="nav-item menu-items">
                    <a style=" {{ $title === 'Dashboard' ? 'background-color: #957dad;' : 'background-color: #fff;' }} color: white"
                        class="nav-link" href="/artis-verified/dashboard">
                        @if ($title === 'Dashboard')
                            <span class=" mr-2">
                                <svg width="35" height="35" viewBox="0 0 35 35" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14 35H5.25V17.5H0L17.5 0L35 17.5H29.75V35H21V24.5H14V35Z"
                                        fill="white" />
                                </svg>

                            </span>
                        @else
                            <span class=" mr-2">
                                <svg width="35" height="35" viewBox="0 0 35 35" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14 35H5.25V17.5H0L17.5 0L35 17.5H29.75V35H21V24.5H14V35Z"
                                        fill="#957DAD" />
                                </svg>
                            </span>
                        @endif
                        <span class="menu-title"
                            style="{{ $title === 'Dashboard' ? 'color: #fff;' : 'color: #957dad;' }} ">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item menu-items mt-2">
                    <a style="{{ $title === 'Unggah Audio' ? 'background-color: #957dad;' : 'background-color: #fff;' }} color: white;"
                        class="nav-link py-2" href="/artis-verified/unggahAudio">
                        @if ($title === 'Unggah Audio')
                            <span class=" mr-2">
                                <svg width="39" height="35" viewBox="0 0 39 39" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.5 19.5H26.5" stroke="white" stroke-width="4" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M19.5 26.5V12.5" stroke="white" stroke-width="4" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M14.25 37H24.75C33.5 37 37 33.5 37 24.75V14.25C37 5.5 33.5 2 24.75 2H14.25C5.5 2 2 5.5 2 14.25V24.75C2 33.5 5.5 37 14.25 37Z"
                                        stroke="white" stroke-width="4" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </span>
                        @else
                            <span class=" mr-2">
                                <svg width="39" height="39" viewBox="0 0 39 39" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.5 19.5H26.5" stroke="#957DAD" stroke-width="4" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M19.5 26.5V12.5" stroke="#957DAD" stroke-width="4" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M14.25 37H24.75C33.5 37 37 33.5 37 24.75V14.25C37 5.5 33.5 2 24.75 2H14.25C5.5 2 2 5.5 2 14.25V24.75C2 33.5 5.5 37 14.25 37Z"
                                        stroke="#957DAD" stroke-width="4" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>

                            </span>
                        @endif
                        <span class="menu-title"
                            style="{{ $title === 'Unggah Audio' ? 'color: #fff;' : 'color: #957dad;' }} ">Unggah</span>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="container-fluid page-body-wrapper main-panel" style="z-index: 1">

            <nav class="navbar p-0 fixed-top d-flex flex-row">
                <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
                    <ul class="navbar-nav w-100 ml-5">
                        <li class="nav-item w-75 ml-5 mx-auto">
                            <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                                <input type="text" class="form-control rounded-4" placeholder="Search products" />
                            </form>
                        </li>
                    </ul>
                    <ul class="navbar-nav navbar-nav-right">
                        <li class="nav-item dropdown">
                            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown"
                                href="#" data-toggle="dropdown">
                                <i class="mdi mdi-bell"></i>
                                <!-- <span class="count bg-danger"></span> -->
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                                aria-labelledby="notificationDropdown">
                                <a class="dropdown-item preview-item" style="background-color: white; color: #6c6c6c">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon rounded-circle">
                                            <i class="mdi mdi-calendar text-success"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject mb-1" style="font-weight: 500">
                                            Event today
                                        </p>
                                        <p class="text-muted ellipsis mb-0">
                                            Just a reminder that you have an event today
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                                <div class="navbar-profile">
                                    <img class="img-xs rounded-circle" src="assets/images/faces/face15.jpg"
                                        alt="" />
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                                aria-labelledby="profileDropdown"
                                style="
                width: 30%;
                background-color: #ececec;
                border-radius: 10px;
              ">
                                <a class="dropdown-item preview-item">
                                    <div class="profile-pic gap-2"
                                        style="
                    display: flex;
                    flex-direction: row;
                    justify-content: center;
                    align-items: center;
                  ">
                                        <div class="count-indicator">
                                            <img class="img-xs rounded-circle" src="assets/images/faces/face15.jpg"
                                                alt="" />
                                        </div>
                                        <div class="profile-name">
                                            <h6 class="mb-0 font-weight-normal" style="color: #957dad">
                                                Henry Klein
                                            </h6>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon rounded-circle">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="1em"
                                                viewBox="0 0 512 512">
                                                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                <path
                                                    d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject mb-1 text-dark">Settings</p>
                                    </div>
                                </a>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon rounded-circle">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="1em"
                                                viewBox="0 0 448 512">
                                                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                <path
                                                    d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject mb-1 text-dark">Keluar</p>
                                    </div>
                                </a>
                            </div>
                        </li>
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                        data-toggle="offcanvas">
                        <span class="mdi mdi-format-line-spacing"></span>
                    </button>
                </div>
            </nav>

            @yield('content')
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>

    {{-- <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <script src="assets/js/dashboard.js"></script> --}}
</body>

</html>

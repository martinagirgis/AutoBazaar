<!--- Sidemenu -->
<div id="sidebar-menu">
    <!-- Left Menu Start -->
    <ul class="metismenu list-unstyled" id="side-menu">
        <li class="menu-title">لوحة التحكم</li>
        <li>
            <a href="javascript: void(0);" class="has-arrow">
                <i class="fas fa-exclamation-triangle"></i>
                <span> المسؤولين </span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{route("admins.index")}}">عرض الكل</a></li>
                <li><a href="{{route("admins.create")}}">اضافة مسؤول جديد</a></li>
            </ul>
        </li>

        <li>
            <a href="javascript: void(0);" class="has-arrow">
                <i class="fas fa-exclamation-triangle"></i>
                <span> المستخدمين و التجار </span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{route("users.index")}}">عرض الكل</a></li>
                <li><a href="{{route("users.create")}}">اضافة مستخدم او تاجر جديد</a></li>
            </ul>
        </li>

        <li>
            <a href="javascript: void(0);" class="has-arrow">
                <i class="fas fa-exclamation-triangle"></i>
                <span> اصحاب مركز الخدمة </span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{route("profileMaintenance.index")}}">عرض الكل</a></li>
                <li><a href="{{route("profileMaintenance.create")}}">اضافة صاحب مركز الخدمة جديد</a></li>
            </ul>
        </li>

        <li>
            <a href="javascript: void(0);" class="has-arrow">
                <i class="fas fa-exclamation-triangle"></i>
                <span> المنجات </span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{route("products.index")}}">عرض الكل</a></li>
                <li><a href="{{route("products.create")}}">اضافة منتج جديد</a></li>
            </ul>
        </li>

        <li>
            <a href="javascript: void(0);" class="has-arrow">
                <i class="fas fa-exclamation-triangle"></i>
                <span>منتجات للإيجار </span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{route("carsRentals.index")}}">عرض الكل</a></li>
                <li><a href="{{route("carsRentals.create")}}">اضافة منتج للإيجار جديد</a></li>
            </ul>
        </li>

        <li>
            <a href="javascript: void(0);" class="has-arrow">
                <i class="fas fa-exclamation-triangle"></i>
                <span> أقسام رئيسية </span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{route("categories.index")}}">عرض الكل</a></li>
                <li><a href="{{route("categories.create")}}">اضافة قسم رئيسي جديد</a></li>
            </ul>
        </li>

        <li>
            <a href="javascript: void(0);" class="has-arrow">
                <i class="fas fa-exclamation-triangle"></i>
                <span> اقسام الاقسام </span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{route("sections.index")}}">عرض الكل</a></li>
                <li><a href="{{route("sections.create")}}">اضافة قسم بالاليات الثقيلة جديد</a></li>
            </ul>
        </li>

        <li>
            <a href="javascript: void(0);" class="has-arrow">
                <i class="fas fa-exclamation-triangle"></i>
                <span> مراكز الصيانة </span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{route("maintenanceCenters.index")}}">عرض الكل</a></li>
                <li><a href="{{route("maintenanceCenters.create")}}">اضافة مركز صيانة جديد</a></li>
            </ul>
        </li>

        <li>
            <a href="javascript: void(0);" class="has-arrow">
                <i class="fas fa-exclamation-triangle"></i>
                <span> الاختصاصات لمراكز الصيانة </span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{route("specializations.index")}}">عرض الكل</a></li>
                <li><a href="{{route("specializations.create")}}">اضافة اختصاص جديد</a></li>
            </ul>
        </li>

        <li>
            <a href="javascript: void(0);" class="has-arrow">
                <i class="fas fa-exclamation-triangle"></i>
                <span> التصنيفات </span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{route("typeCategories.index")}}">عرض الكل</a></li>
                <li><a href="{{route("typeCategories.create")}}">اضافة تصنيف جديد</a></li>
            </ul>
        </li>

        <li>
            <a href="javascript: void(0);" class="has-arrow">
                <i class="fas fa-exclamation-triangle"></i>
                <span> انواع الوقود </span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{route("fuelTypes.index")}}">عرض الكل</a></li>
                <li><a href="{{route("fuelTypes.create")}}">اضافة نوع الوقود جديد</a></li>
            </ul>
        </li>

        <li>
            <a href="javascript: void(0);" class="has-arrow">
                <i class="fas fa-exclamation-triangle"></i>
                <span> ناقل الحركة </span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{route("gearboxes.index")}}">عرض الكل</a></li>
                <li><a href="{{route("gearboxes.create")}}">اضافة ناقل الحركة جديد</a></li>
            </ul>
        </li>

        <li>
            <a href="javascript: void(0);" class="has-arrow">
                <i class="fas fa-exclamation-triangle"></i>
                <span> انواع الاعلان </span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{route("sellTypes.index")}}">عرض الكل</a></li>
                <li><a href="{{route("sellTypes.create")}}">اضافة نوع الاعلان جديد</a></li>
            </ul>
        </li>

        <li>
            <a href="javascript: void(0);" class="has-arrow">
                <i class="fas fa-exclamation-triangle"></i>
                <span> حالات المنتج </span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{route("statuses.index")}}">عرض الكل</a></li>
                <li><a href="{{route("statuses.create")}}">اضافة حالة منتج جديد</a></li>
            </ul>
        </li>

        <li>
            <a href="javascript: void(0);" class="has-arrow">
                <i class="fas fa-exclamation-triangle"></i>
                <span> باقات الدفع </span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{route("subsriptions.index")}}">عرض الكل</a></li>
                <li><a href="{{route("subsriptions.create")}}">اضافة باقة دفع جديد</a></li>
            </ul>
        </li>

        <li>
            <a href="javascript: void(0);" class="has-arrow">
                <i class="fas fa-exclamation-triangle"></i>
                <span> الانواع </span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{route("makes.index")}}">عرض الكل</a></li>
                <li><a href="{{route("makes.create")}}">اضافة نوع جديد</a></li>
            </ul>
        </li>

        <li>
            <a href="javascript: void(0);" class="has-arrow">
                <i class="fas fa-exclamation-triangle"></i>
                <span> الاضافات للمنتجات </span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{route("advandages.index")}}">عرض الكل</a></li>
                <li><a href="{{route("advandages.create")}}">اضافة إضافات للمنتجات جديدة</a></li>
            </ul>
        </li>

        <li>
            <a href="javascript: void(0);" class="has-arrow">
                <i class="fas fa-exclamation-triangle"></i>
                <span> المدن </span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{route("cities.index")}}">عرض الكل</a></li>
                <li><a href="{{route("cities.create")}}">اضافة مدينة جديد</a></li>
            </ul>
        </li>

        <li>
            <a href="javascript: void(0);" class="has-arrow">
                <i class="fas fa-exclamation-triangle"></i>
                <span> الاحياء </span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{route("districts.index")}}">عرض الكل</a></li>
                <li><a href="{{route("districts.create")}}">اضافة حي جديد</a></li>
            </ul>
        </li>

    </ul>
</div>
<!-- Sidebar -->

@extends('layouts.app')


<!-- @section('style')
.about-us{
            padding: 400px 0;
            text-align: center;
            background-image: url('/images/map.png');
             background-size: 800px;

            background-position: center;
            background-repeat: no-repeat; /* أو repeat لو تبيها تتكرر */
            transition: background-size 0.5s ease-in-out; /* 👈 ترانزشن سموذ */


        }
@endsection -->
@section('content')
<section class="about-us py-5" style="margin-top:70px; margin-bottom:100px">
    <div class="container text-center">
    <h2 style=" font-size: 2rem;font-weight: 700;text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);margin-bottom: 20px;">
نبذة عنا</h2>
    <hr class="mb-4 w-75 mx-auto " >

        <p class="lead" style="max-width: 800px; margin: auto; line-height: 2;">
            نرحب بكم في منصتكم الوطنية لاكتشاف المتاحف في المملكة العربية السعودية. نحن هنا لنوفّر تجربة رقمية فريدة 
            تتيح للزوار التعرف على المتاحف المختلفة، حجز زياراتهم بكل سهولة، ومتابعة أبرز الفعاليات والمعارض.
        </p>

        <p class="mt-4" style="max-width: 800px; margin: auto; line-height: 2;">
            تم تطوير هذا الموقع ضمن مبادرات التحول الرقمي التي تسعى المملكة لتحقيقها وفقًا لـ <strong>رؤية السعودية 2030</strong>، 
            التي تؤكد على تعزيز الثقافة والفنون، ورفع نسبة الزيارات للوجهات السياحية والتراثية.
        </p>

        <p class="mt-4" style="max-width: 800px; margin: auto; line-height: 2;">
            نهدف إلى خلق جسر بين الأجيال من خلال تعريف الشباب والمجتمع بتراثهم الوطني، وتحفيزهم على زيارة المتاحف واكتشاف القصص 
            التي تحكيها كل قطعة أثرية، مما يعزز من الانتماء والوعي الثقافي.
        </p>

        <p class="mt-4" style="max-width: 800px; margin: auto; line-height: 2;">
            نحن نؤمن أن المتاحف ليست مجرد مبانٍ تحفظ التاريخ، بل هي منصات نابضة بالحياة، تعزز الحوار، وتنمّي حب المعرفة 
            والاكتشاف. لذلك، حرصنا على تقديم معلومات مفصلة وسهلة الوصول حول كل متحف، من حيث الموقع، نوع المعروضات، أوقات الزيارة، وحتى تقييمات الزوار.
        </p>

        <p class="mt-4" style="max-width: 800px; margin: auto; line-height: 2;">
            كما نطمح لأن نكون المرجع الأول لكل من يرغب في استكشاف المتاحف السعودية، سواء كان سائحًا، باحثًا، أو طالبًا مهتمًا بالتاريخ والفنون والعلوم.
        </p>

        <p class="mt-4 mb-0" style="max-width: 800px; margin: auto; line-height: 2;">
            انضموا إلينا في هذه الرحلة لاكتشاف كنوز المملكة الثقافية، وكونوا جزءًا من مستقبل يُبنى على المعرفة، الأصالة، والاعتزاز بالهوية الوطنية.
        </p>
    </div>
</section>

@endsection
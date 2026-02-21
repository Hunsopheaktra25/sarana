<!DOCTYPE html>
<html lang="km">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>វិញ្ញាសា និងដំណោះស្រាយ ភាសាខ្មែរ ២០១៥</title>
    <link rel="stylesheet" href="sub.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>

<div class="container">
    <h1>វិញ្ញាសា និងដំណោះស្រាយ ភាសាខ្មែរ ២០១៥</h1>

    <div class="exercise-box">
        <div class="q-header">វិញ្ញាសា៖ តែងសេចក្តី (១០០ ពិន្ទុ)</div>
        <p><strong>ប្រធាន៖</strong> មតិមួយពោលថា <span class="math">«ការងារជាមាសប្រាក់»</span>។<br>
        ចូរពន្យល់ដោយលើកយកឧទាហរណ៍ក្នុងសង្គម និងក្នុងអក្សរសិល្ប៍មកបញ្ជាក់ឱ្យបានច្បាស់លាស់។</p>
        
        <div style="display: flex; gap: 10px;">
            <button class="btn-solve" onclick="toggle(this)">មើលគម្រោងតែងសេចក្តី</button>
            <button class="btn-solve" onclick="window.print()"><i class="fa fa-print"></i> បោះពុម្ព</button>
            <button class="btn-solve" onclick="downloadContent()"><i class="fa fa-download"></i> ទាញយក</button>
        </div>

        <div class="solution" id="content">
            <strong>១. សេចក្តីផ្តើម៖</strong><br>
            - លំនាំបញ្ហា៖ តម្លៃនៃមនុស្សស្ថិតនៅលើសកម្មភាពការងារ។<br>
            - ចំណូលបញ្ហា៖ បង្ហាញប្រធានបទ "ការងារជាមាសប្រាក់"។<br>
            - ចំណោទបញ្ហា៖ តើការងារផ្ដល់ផលប្រយោជន៍អ្វីខ្លះដល់មនុស្ស?<br><br>

            <strong>២. តួសេចក្តី៖</strong><br>
            - <u>ពន្យល់ពាក្យ៖</u> <b>ការងារ</b> (ការបញ្ចេញកម្លាំងកាយ/បញ្ញា) និង <b>មាសប្រាក់</b> (ទ្រព្យសម្បត្តិ/កិត្តិយស)។<br>
            - <u>ការបកស្រាយ៖</u> ការងារបង្កើតចំណូល ចិញ្ចឹមជីវិត និងធ្វើឱ្យសង្គមជាតិរីកចម្រើន។<br><br>
            
            <strong>៣. ឧទាហរណ៍ (Examples):</strong><br>
            - <b>អក្សរសិល្ប៍ (ចៅចិត្រ):</b> ក្នុងរឿងកុលាបប៉ៃលិន ចៅចិត្រតស៊ូធ្វើការគ្រប់យ៉ាងរហូតមានជីវភាពរុងរឿង។<br>
            - <b>អក្សរសិល្ប៍ (វិជ្ជា):</b> ក្នុងរឿងស៊ឹមអ្នកបរឡាន វិជ្ជាប្រើចំណេះដឹងជាការងារដើម្បីកសាងសេដ្ឋកិច្ច។<br>
            - <b>សង្គម (កសិកម្ម):</b> កសិករដែលខំប្រឹងបង្កបង្កើនផល តែងទទួលបានភោគផលជាមាសប្រាក់។<br>
            - <b>សង្គម (អាជីវកម្ម):</b> សហគ្រិនជោគជ័យ សុទ្ធតែចាប់ផ្ដើមពីការខិតខំធ្វើការងារយ៉ាងធ្ងន់ធ្ងរ។<br>
            - <b>សង្គម (ជំនាញ):</b> អ្នកមានវិជ្ជាជីវៈច្បាស់លាស់ ប្រើចំណេះដឹងជាការងារដើម្បីទទួលបានកម្រៃខ្ពស់។<br><br>

            <strong>៤. សេចក្តីបញ្ចប់៖</strong><br>
            - វាយតម្លៃប្រធាន និងផ្ដល់មតិផ្ទាល់ខ្លួន (យុវជនត្រូវស្រឡាញ់ការងារ)។
        </div>
    </div>
</div>

<script>
    // មុខងារ បើក/បិទ ដំណោះស្រាយ
    function toggle(btn) {
        var sol = btn.parentElement.nextElementSibling;
        if (sol.style.display === "block") {
            sol.style.display = "none";
            btn.innerText = "មើលគម្រោងតែងសេចក្តី";
        } else {
            sol.style.display = "block";
            btn.innerText = "លាក់គម្រោងតែងសេចក្តី";
        }
    }

    // មុខងារ ទាញយកជា Text file
    function downloadContent() {
        var content = document.getElementById("content").innerText;
        var blob = new Blob([content], { type: "text/plain;charset=utf-8" });
        var link = document.createElement("a");
        link.href = URL.createObjectURL(blob);
        link.download = "វិញ្ញាសា_ភាសាខ្មែរ_២០១៥.txt";
        link.click();
        URL.revokeObjectURL(link.href);
    }
</script>

</body>
</html>
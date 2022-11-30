<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <style>
        body {
            line-height: 1.6;
            margin: 2em;
        }

        th {
            background-color: #001f3f;
            color: #fff;
            padding: 0.5em 1em;
        }

        td {
            border-top: 1px solid #eee;
            padding: 0.5em 1em;
        }

        input {
            cursor: pointer;
        }

        /* Column types */
        th.missed-col {
            background-color: #f00;
        }

        td.missed-col {
            background-color: #ffecec;
            color: #f00;
            text-align: center;
        }

        .name-col {
            text-align: left;
        }
    </style>
</head>

<body>

    <h1>Udacity Attendance</h1>

    <table id="attendence-table">
        <thead>
            <tr>
                <th class="name-col">Student Name</th>
                <th class="missed-col">Days Missed-col</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>

    <br />

    <table>
        <thead>
            <tr>
                <th class="name-col">Student Name</th>
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
                <th>5</th>
                <th>6</th>
                <th>7</th>
                <th>8</th>
                <th>9</th>
                <th>10</th>
                <th>11</th>
                <th>12</th>
                <th class="missed-col">Days Missed-col</th>
            </tr>
        </thead>
        <tbody>
            <tr class="student">
                <td class="name-col">Slappy the Frog</td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="missed-col">0</td>
            </tr>
            <tr class="student">
                <td class="name-col">Lilly the Lizard</td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="missed-col">0</td>
            </tr>
            <tr class="student">
                <td class="name-col">Paulrus the Walrus</td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="missed-col">0</td>
            </tr>
            <tr class="student">
                <td class="name-col">Gregory the Goat</td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="missed-col">0</td>
            </tr>
            <tr class="student">
                <td class="name-col">Adam the Anaconda</td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="missed-col">0</td>
            </tr>
        </tbody>
    </table>
    <br />

    <script>
        var model = {
            init: function () {
                if (true) {
                    console.log('Creating attendance records...');

                    function getRandom() {
                        return (Math.random() >= 0.5);
                    }

                    var nameColumns = $('tbody .name-col'),
                        attendance = {};

                    nameColumns.each(function () {
                        var name = this.innerText;
                        attendance[name] = [];

                        for (var i = 0; i <= 11; i++) {
                            attendance[name].push(getRandom());
                        }
                    });

                    localStorage.attendance = JSON.stringify(attendance);
                }

                model.attendence = JSON.parse(localStorage.attendance);
            }
        };

        var controller = {

            init: function () {
                model.init();
                view.init();
                controller.countMissing();
            },

            getStudents: function () {
                return model.attendence;
            },

            getNumOfDays: function () {
                return model.attendence[Object.keys(model.attendence)[0]];
            },

            getAttendence: function (student) {
                return controller.getStudents()[student];
            },

            updateLS: function ($studentRows) {
                var newAttendance = {};

                $studentRows.each(function () {
                    var studentName = $(this).children('.name-col').text(),
                        studentCheckboxes = $(this).children('td').children('input');

                    newAttendance[name] = [];

                    studentCheckboxes.each(function () {
                        newAttendance[name].push($(this).prop('checked'));
                    });

                });
                console.log(newAttendance);
                localStorage.attendance = JSON.stringify(newAttendance);
            },

            checkBoxes: function () {
                $.each(model.attendence, function (name, days) {
                    var studentRow = $('tbody .name-col:contains("' + name + '")').parent('tr'),
                        dayChecks = $(studentRow).children('.attend-col').children('input');

                    dayChecks.each(function (i) {
                        $(this).prop('checked', days[i]);
                    });
                });
            },

            countMissing: function () {

                view.$allMissed.each(function () {
                    var studentRow = $(this).parent('tr'),
                        dayChecks = $(studentRow).children('td').children('input'),
                        numMissed = 0;

                    dayChecks.each(function () {
                        if (!$(this).prop('checked')) {
                            numMissed++;
                        }
                    });

                    $(this).text(numMissed);
                });
            }
        };

        var view = {
            init: function () {

                // Add # of days to attendence sheet based on data model
                $.each(controller.getNumOfDays(), function (i) {
                    $('#attendence-table thead .missed-col').before('<th>' + (i + 1) + '</th>');
                });

                // Add students to attendence sheet
                $.each(controller.getStudents(), function (student) {
                    $('#attendence-table tbody').append('<tr class="student"></tr>');
                    $('#attendence-table tbody tr').last().append('<td class="name-col">' + student + '</td>');
                    $.each(controller.getAttendence(student), function () {
                        $('#attendence-table tbody tr').last().append('<td class="attend-col"><input type="checkbox"></td>');
                    });
                    $('#attendence-table tbody tr').last().append('<td class="missed-col"></td>');
                });

                view.$allMissed = $('tbody .missed-col');
                view.$allCheckboxes = $('tbody input');
                view.$studentRows = $('tbody .student');

                // Fill out attendence
                controller.checkBoxes();


                // Count missing days
                controller.countMissing();

                // When a checkbox is clicked, update localStorage
                // Me: This is inefficient. When a checkbox is clicked, the whole attendence sheet is checked
                // It should only update the student.
                view.$allCheckboxes.on('click', function () {
                    controller.updateLS(view.$studentRows);
                    controller.countMissing();
                });
            }
        };

        controller.init();
    </script>
</body>

</html>
<?php $__env->startSection('title'); ?> <title>Editeer</title>
<?php $__env->startSection('style'); ?>
    <meta name="_token" content="<?php echo e(csrf_token()); ?>">

    <style>
        .searchdiv{
            //border: 1px solid orangered;
            display:flex;
            justify-content: flex-end;
            align-items:center;
            margin: 15px 0px;
        }
        .search{
            margin: 20px;
            float: right;
            border: 1px solid black;
            font-size: 2em;
            display:flex;
            justify-content: center;
            align-items:center;
        }
        .search input{
            width: 300px;
            height: 50px;
            border: transparent;
            border-right: none;
            outline: none;
            padding-left: 5px;
            float: left;
        }
        table, th, td {
            border: 1px solid darkgray;
            border-collapse: collapse;
        }
        table{
            margin-bottom: 20px;
            overflow:hidden; overflow-y:scroll;
        }
        th{
            text-align: center;
            background-color: #e00049;
            color: #E9F3F8;
        }
        th:not(:last-child){
            height: 50px;
            width: 350px;
        }
        td:not(:last-child){
            padding: 15px;
            text-align: left;
        }
    </style>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="searchdiv">
            <div class="search">
                <input type="text" class="form-controller" id="search" name="search">
                <img src="<?php echo e(asset("/image/magnifying_glass.png")); ?>" alt="magnifying_glass.png" height="45" width="45"/>
            </div>
        </div>
        <div class="tablediv">
            <table>
                <thead>
                <tr>
                    <th>Naam</th>
                    <th>Voornaam</th>
                    <th>Klas</th>
                    <th></th>
                </tr>
                </thead>
                <?php $__currentLoopData = $aTravellers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $traveller => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($data->lastname); ?></td>
                        <td><?php echo e($data->firstname); ?></td>
                        <td><?php echo e($data->study_name); ?>&nbsp <?php echo e($data->major_name); ?></td>
                        <td><a href="/editTraveller/<?php echo e($data->user_id); ?>"><img src="<?php echo e(asset("/image/pen.png")); ?>" alt="pen.png" height="40" width="40"/></a></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        </div>
    </div>

    <script type="text/javascript">
        $('#search').on('keyup',function() {
            $value = $(this).val();
            $.ajax({
                type: 'get',
                url: '<?php echo e(URL::to('search')); ?>',
                data: {'search': $value},
                success: function (data) {
                    $('tbody').html(data);
                }
            });
        });
    </script>
    <script type="text/javascript">
        $.ajaxSetup({ headers: { 'csrftoken' : '<?php echo e(csrf_token()); ?>' } });
    </script>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make("user.templates.templateFrontEnd", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
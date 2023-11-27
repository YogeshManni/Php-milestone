<?php require "partials/head.php" ?>

<?php require "partials/nav.php" ?>



<div class="mx-40 mt-2 relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Service Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Service Price
                </th>
                <th scope="col" class="px-6 py-3">
                    Username
                </th>
                <th scope="col" class="px-6 py-3">
                    Date Ordered
                </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($orders as $order)
            {
            ?>
            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                   <?= $order['service_name'] ?>
                </th>
                <td class="px-6 py-4">
                <?= $order['price'] ?>
                </td>
                <td class="px-6 py-4">
                <?= $order['username'] ?>
                </td>
                <td class="px-6 py-4">
                <?= $order['date_booked'] ?>
                </td>
              
            </tr>
            <?php }?>
            
          
        </tbody>
    </table>
</div>

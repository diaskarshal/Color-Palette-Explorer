<div class="comment py-2 max-w-md mx-auto">
   <div class="w-fit h-fit flex flex-col gap-1 w-full max-w-[480px]">
      <div class="flex items-center space-x-2 rtl:space-x-reverse">
         <span class="text-sm font-semibold text-gray-900 dark:text-white"><?php echo $data['name']; ?></span>
         <span class="text-sm font-normal text-gray-500 dark:text-gray-400"><?php echo $data['date']; ?></span>
      </div>
      <div class="flex flex-col leading-1.5 p-4 border-gray-200 bg-gray-100 rounded-e-xl rounded-es-xl dark:bg-gray-700">
         <p class="text-sm font-normal text-gray-900 dark:text-white"> <?php echo $data['comment']; ?> </p>
         <p class="text-sm font-normal text-green-600 dark:text-white"> <?php echo $data['palette']; ?> </p>
      </div>
   </div>   
</div>

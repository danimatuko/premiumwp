 <form action="<?php echo esc_url(home_url('/')) ?>" class="d-flex">
     <div class="input-group mb-3">
         <input class="form-control rounded-0" type="search" name='s' placeholder="Search" aria-label="Search" value="<?php esc_attr_e(get_search_query()) ?>">
         <button class="btn btn-primary rounded-0" type="submit">
             <i class="fas fa-search"></i>
         </button>
     </div>
 </form>
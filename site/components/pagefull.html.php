<div class="pagefull col-12 order-3 d-flex flex-column text-end mt-3">
    <p class="content order-xl-2 mx-auto mb-0 px-3 py-5">
        <span class="row flex-column g-0">
            <span class="text-xl-center mx-auto mb-3 mt-xl-4">
                <?php
                
                    if ($this->heading_prop) {
                
                        echo $this->heading_prop;
                    }
                ?>
            </span>
            <span class="col-12 col-xl-6 mx-auto">
                <?php 
                
                    if ($this->paragraph_prop) {
                        
                        echo $this->paragraph_prop;

                    }
                    
                ?>
            </span>
        </span>
    </p>
    <div class="before order-xl-1 position-relative overflow-hidden"></div>
</div>
<template>
    <div class="container" id="notification" style="display: none;">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Error</div>

                    <div class="card-body">
                        Mobile device not detected. Swipe unavailable.
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            
        var intervalId = window.setInterval(function(){
        if( !/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
            document.getElementById('notification').style.display = 'block';
        }else{
            document.getElementById('notification').style.display = 'none';
        }
        }, 500);

        }
    }
</script>
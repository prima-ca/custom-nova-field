<template>
    <div class="hidden">
        <input
            :id="field.attribute"
            type="hidden"
            v-model="value"
        />
    </div>
</template>

<script>
import { FormField, HandlesValidationErrors } from 'laravel-nova'

export default {
    mixins: [HandlesValidationErrors, FormField],

    /**
     * Mount the component.
     */
    mounted() {
        this.setInitialValue()

        this.field.fill = this.fill
    },

}
</script>

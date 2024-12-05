import { defineStore } from 'pinia'

export const useBusStore = defineStore({
    id: 'bus',

    state: () => {
        return {
            migrationUri: null,
            decodedUri: null,
            inManagementMode: false,
            editedGroupName: null,
            username: null,
        }
    },

    actions: {
        
    },
})

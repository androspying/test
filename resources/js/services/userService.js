import { httpClientFactory } from '@/services/httpClientFactory'

const apiClient = httpClientFactory('api')
const webClient = httpClientFactory('web')

export default {
    /**
     * Get current signed-in user preferences
     * 
     * @returns promise
     */
    getPreferences(config = {}) {
        return apiClient.get('/user/preferences', { ...config })
    },

    /**
     * Update a user preference
     * 
     * @param {string} name 
     * @param {any} value 
     * @returns promise
     */
    updatePreference(name, value, config = {}) {
        return apiClient.put('/user/preferences/' + name, { value: value }, { ...config })
    },

    /**
     * Get all webauthn devices
     * 
     * @param {string} name 
     * @param {any} value 
     * @returns promise
     */
    getWebauthnDevices(config = {}) {
        return webClient.get('/webauthn/credentials', { ...config })
    },

    /**
     * Revoke a webauthn device
     * 
     * @param {string} name 
     * @param {any} value 
     * @returns promise
     */
    revokeWebauthnDevice(credentialId, config = {}) {
        return webClient.delete('/webauthn/credentials/' + credentialId, { ...config })
    },

    /**
     * Get all user PATs
     * 
     * @param {*} config 
     * @returns promise
     */
    getPersonalAccessTokens(config = {}) {
        return webClient.get('/oauth/personal-access-tokens', { ...config })
    },

    /**
     * Delete a user PAT
     * 
     * @param {*} tokenId 
     * @returns promise
     */
    deletePersonalAccessToken(tokenId, config = {}) {
        return webClient.delete('/oauth/personal-access-tokens/' + tokenId, { ...config })
    },

    /**
     * Get all registered users
     * 
     * @returns promise
     */
    getAll(config = {}) {
        return apiClient.get('/users', { ...config })
    },

    /**
     * Get a registered user by id
     * 
     * @returns promise
     */
    getById(id, config = {}) {
        return apiClient.get('/users/' + id, { ...config })
    },

    /**
     * Reset user password
     * 
     * @returns promise
     */
    resetPassword(id, config = {}) {
        return apiClient.patch('/users/' + id + '/password/reset', {}, { ...config })
    },

    /**
     * Delete user
     * 
     * @returns promise
     */
    delete(id, config = {}) {
        return apiClient.delete('/users/' + id, { ...config })
    },

    /**
     * Promote or demote user from the admin role
     * 
     * @returns promise
     */
    promote(id, payload, config = {}) {
        return apiClient.patch('/users/' + id + '/promote', payload, { ...config })
    },

    /**
     * Purge user's PATs
     * 
     * @returns promise
     */
    revokePATs(id, config = {}) {
        return apiClient.delete('/users/' + id + '/pats', { ...config })
    },

    /**
     * Purge user's PATs
     * 
     * @returns promise
     */
    revokeWebauthnCredentials(id, config = {}) {
        return apiClient.delete('/users/' + id + '/credentials', { ...config })
    },

    /**
     * Get user's authentication logs
     * 
     * @returns promise
     */
    getauthentications(id, period = 12, limit, config = {}) {
        return apiClient.get('/users/' + id + '/authentications?period=' + period + (limit ? '&limit=' + limit : ''), { ...config })
    },
    
}
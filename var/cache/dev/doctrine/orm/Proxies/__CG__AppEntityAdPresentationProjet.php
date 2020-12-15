<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class AdPresentationProjet extends \App\Entity\AdPresentationProjet implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\AdPresentationProjet' . "\0" . 'id', '' . "\0" . 'App\\Entity\\AdPresentationProjet' . "\0" . 'presentationOperation', '' . "\0" . 'App\\Entity\\AdPresentationProjet' . "\0" . 'pays', '' . "\0" . 'App\\Entity\\AdPresentationProjet' . "\0" . 'codePostal', '' . "\0" . 'App\\Entity\\AdPresentationProjet' . "\0" . 'ville', '' . "\0" . 'App\\Entity\\AdPresentationProjet' . "\0" . 'adresse', '' . "\0" . 'App\\Entity\\AdPresentationProjet' . "\0" . 'presentationCommodites', '' . "\0" . 'App\\Entity\\AdPresentationProjet' . "\0" . 'presentationAmbitionsProjet'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\AdPresentationProjet' . "\0" . 'id', '' . "\0" . 'App\\Entity\\AdPresentationProjet' . "\0" . 'presentationOperation', '' . "\0" . 'App\\Entity\\AdPresentationProjet' . "\0" . 'pays', '' . "\0" . 'App\\Entity\\AdPresentationProjet' . "\0" . 'codePostal', '' . "\0" . 'App\\Entity\\AdPresentationProjet' . "\0" . 'ville', '' . "\0" . 'App\\Entity\\AdPresentationProjet' . "\0" . 'adresse', '' . "\0" . 'App\\Entity\\AdPresentationProjet' . "\0" . 'presentationCommodites', '' . "\0" . 'App\\Entity\\AdPresentationProjet' . "\0" . 'presentationAmbitionsProjet'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (AdPresentationProjet $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getPresentationOperation(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPresentationOperation', []);

        return parent::getPresentationOperation();
    }

    /**
     * {@inheritDoc}
     */
    public function setPresentationOperation(string $presentationOperation): \App\Entity\AdPresentationProjet
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPresentationOperation', [$presentationOperation]);

        return parent::setPresentationOperation($presentationOperation);
    }

    /**
     * {@inheritDoc}
     */
    public function getPays(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPays', []);

        return parent::getPays();
    }

    /**
     * {@inheritDoc}
     */
    public function setPays(string $pays): \App\Entity\AdPresentationProjet
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPays', [$pays]);

        return parent::setPays($pays);
    }

    /**
     * {@inheritDoc}
     */
    public function getCodePostal(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodePostal', []);

        return parent::getCodePostal();
    }

    /**
     * {@inheritDoc}
     */
    public function setCodePostal(int $codePostal): \App\Entity\AdPresentationProjet
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCodePostal', [$codePostal]);

        return parent::setCodePostal($codePostal);
    }

    /**
     * {@inheritDoc}
     */
    public function getVille(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVille', []);

        return parent::getVille();
    }

    /**
     * {@inheritDoc}
     */
    public function setVille(string $ville): \App\Entity\AdPresentationProjet
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVille', [$ville]);

        return parent::setVille($ville);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdresse(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdresse', []);

        return parent::getAdresse();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdresse(string $adresse): \App\Entity\AdPresentationProjet
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdresse', [$adresse]);

        return parent::setAdresse($adresse);
    }

    /**
     * {@inheritDoc}
     */
    public function getPresentationCommodites(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPresentationCommodites', []);

        return parent::getPresentationCommodites();
    }

    /**
     * {@inheritDoc}
     */
    public function setPresentationCommodites(string $presentationCommodites): \App\Entity\AdPresentationProjet
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPresentationCommodites', [$presentationCommodites]);

        return parent::setPresentationCommodites($presentationCommodites);
    }

    /**
     * {@inheritDoc}
     */
    public function getPresentationAmbitionsProjet(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPresentationAmbitionsProjet', []);

        return parent::getPresentationAmbitionsProjet();
    }

    /**
     * {@inheritDoc}
     */
    public function setPresentationAmbitionsProjet(string $presentationAmbitionsProjet): \App\Entity\AdPresentationProjet
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPresentationAmbitionsProjet', [$presentationAmbitionsProjet]);

        return parent::setPresentationAmbitionsProjet($presentationAmbitionsProjet);
    }

}